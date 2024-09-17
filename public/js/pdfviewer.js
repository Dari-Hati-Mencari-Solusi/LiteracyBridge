class PdfViewer {
  constructor(url, canvasId, finishButtonId, nextPage, prevPage) {
    this.url = url;
    this.canvasId = canvasId;
    this.finishButtonId = finishButtonId;
    this.pdfDoc = null;
    this.pageNum = 1;
    this.numPages = 0;
    this.nextPage = nextPage;
    this.prevPage = prevPage;

    this.init();
  }

  init() {
    this.getData(this.pageNum);
    document.addEventListener("DOMContentLoaded", () => {
      this.setupFinishButton();
    });
  }

  getData(pageNum) {
    pdfjsLib.getDocument(this.url).promise.then((res) => {
      this.pdfDoc = res;
      this.numPages = res.numPages;
      this.renderPage(pageNum);
      this.checkIfLastPage();      
    });

  }

  renderPage(num) {
    let canvas = document.querySelector(this.canvasId);
    let ctx = canvas.getContext("2d");
    let scale = 1.5;

    this.pdfDoc.getPage(num).then((page) => {
      const viewport = page.getViewport({ scale });
      canvas.height = viewport.height;
      canvas.width = viewport.width;

      const renderCtx = {
        canvasContext: ctx,
        viewport,
      };

      page.render(renderCtx).promise.then(() => {
        this.checkIfLastPage();
      });
    });
  }

  showPrevPage() {        
    if (this.pageNum <= 1) {   
      return;
    } 

    this.pageNum--;
    this.renderPage(this.pageNum);

    if (this.pageNum <= 1) {      
      if (!$(this.prevPage).hasClass("hidden")) {
        $(this.prevPage).addClass("hidden");      
      }          
    } else if (this.pageNum <= this.numPages) {
      if ($(this.nextPage).hasClass("hidden")) {
        $(this.nextPage).removeClass("hidden");      
      }          
    }         
  }

  showNextPage() {
    if (this.pageNum >= this.numPages) {      
      return;
    }

    if ($(this.prevPage).hasClass("hidden")) {
      $(this.prevPage).removeClass("hidden");      
    }    

    this.pageNum++;
    this.renderPage(this.pageNum);
    this.checkIfLastPage();

    if (this.pageNum >= this.numPages) {
      if (!$(this.nextPage).hasClass("hidden")) {
        $(this.nextPage).addClass("hidden");
      }    
    }
  }

  checkIfLastPage() {
    const finishButton = document.querySelector(this.finishButtonId);
    if (finishButton) {
      finishButton.style.display =
        this.pageNum === this.numPages ? "block" : "none";
    }
  }

  setupFinishButton() {
    const finishButton = document.querySelector(this.finishButtonId);
    if (finishButton) {
      finishButton.addEventListener("click", () => {
        fetch("/tambah-poin", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]')
              .content,
          },
          body: JSON.stringify({ userId: finishButton.dataset.userId }),
        })
          .then((response) => response.json())
          .then((data) => {            
            Swal.fire({
              title: "Selamat mendapatkan 5 point",
              html: `Total point kamu sekarang adalah ${data.points}`,                         
              confirmButtonText: "Paham",
              confirmButtonColor: "#3085d6",
            }).then((result) => {
              history.back()
            });
          })
          .catch((error) => console.error("Terjadi kesalahan:", error));
      });
    }
  }
}


const fileName = $("input[name='inpFileName']").val();
const pdfViewer = new PdfViewer(
  `/books/${fileName}`,
  "#pdfArea",
  "#finish-reading-button",
  "#next-page",
  "#prev-page"
);

document.getElementById("prev-page").addEventListener("click", () => {
  pdfViewer.showPrevPage();
});

document.getElementById("next-page").addEventListener("click", () => {
  pdfViewer.showNextPage();
});
