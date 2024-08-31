// class PdfViewer {
//     url = '../../pdfs/sangkuriang.pdf';
//     static pdfDoc = null;
//     static pageNum = 1;
//     static numPages = 0;

//     constructor() {
//         this.getData(PdfViewer.pageNum);
//     }

//     getData(pageNum){
//         // Get Document
//         pdfjsLib
//             .getDocument(this.url)
//             .promise.then(res => {
//                 console.log(res);
//             PdfViewer.pdfDoc = res;
//             PdfViewer.numPages = PdfViewer.pdfDoc.numPages;

//             PdfViewer.renderPage(pageNum);
//             PdfViewer.checkIfLastPage();
//         });
//     }

//     // Render the page
//     static renderPage(num) {
//         let canvas = document.querySelector('#pdfArea');
//         let ctx = canvas.getContext('2d');

//         let scale = 1.5;
//         // Get page
//         PdfViewer.pdfDoc.getPage(num).then(page => {
//             // Set scale
//             const viewport = page.getViewport({ scale });
//             canvas.height = viewport.height;
//             canvas.width = viewport.width;

//             const renderCtx = {
//                 canvasContext: ctx,
//                 viewport
//             };

//             page.render(renderCtx).promise.then(() => {
//                 PdfViewer.checkIfLastPage();
//             });
//         });
//     }

//     static reRenderCanvas(){
//         setTimeout(()=>{
//             PdfViewer.renderPage(PdfViewer.pageNum);
//         },1000);
//     }

//     // Show Prev Page
//     static showPrevPage() {
//         if (PdfViewer.pageNum <= 1) {
//             return;
//         }
//         PdfViewer.pageNum--;
//         this.reRenderCanvas();
//     }



    
//     static showNextPage() {
//         if (PdfViewer.pageNum >= PdfViewer.numPages) {
//             return;
//         }
//         PdfViewer.pageNum++;
//         this.reRenderCanvas();
//         checkIfLastPage(); // Panggil fungsi ini di setiap perubahan halaman
//     }
// }

class PdfViewer {
    constructor(url, canvasId, finishButtonId) {
        this.url = url;
        this.canvasId = canvasId;
        this.finishButtonId = finishButtonId;
        this.pdfDoc = null;
        this.pageNum = 1;
        this.numPages = 0;

        this.init();
    }

    init() {
        this.getData(this.pageNum);
        document.addEventListener('DOMContentLoaded', () => {
            this.setupFinishButton();
        });
    }

    getData(pageNum) {
        pdfjsLib
            .getDocument(this.url)
            .promise.then(res => {
                this.pdfDoc = res;
                this.numPages = res.numPages;
                this.renderPage(pageNum);
                this.checkIfLastPage();
            });
    }

    renderPage(num) {
        let canvas = document.querySelector(this.canvasId);
        let ctx = canvas.getContext('2d');
        let scale = 1.5;

        this.pdfDoc.getPage(num).then(page => {
            const viewport = page.getViewport({ scale });
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            const renderCtx = {
                canvasContext: ctx,
                viewport
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
    }

    showNextPage() {
        if (this.pageNum >= this.numPages) {
            return;
        }
        this.pageNum++;
        this.renderPage(this.pageNum);
        this.checkIfLastPage();
    }

    checkIfLastPage() {
        const finishButton = document.querySelector(this.finishButtonId);
        if (finishButton) {
            finishButton.style.display = (this.pageNum === this.numPages) ? 'block' : 'none';
        }
    }

    setupFinishButton() {
        const finishButton = document.querySelector(this.finishButtonId);
        console.log(document.querySelector('meta[name="csrf-token"]'))
        // if (finishButton) {
        //     finishButton.addEventListener('click', () => {
        //         fetch('/tambah-poin', {
        //             method: 'POST',
        //             headers: {
        //                 'Content-Type': 'application/json',
        //                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        //             },
        //             body: JSON.stringify({ userId: finishButton.dataset.userId })
        //         })
        //         .then(response => response.json())
        //         .then(data => {
        //             console.log('Poin berhasil ditambahkan:', data);
        //             // Redirect or other actions after the point is successfully added
        //         })
        //         .catch(error => console.error('Terjadi kesalahan:', error));
        //     });
        // }
    }
}
