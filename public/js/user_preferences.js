$(document).ready(function () {
  $("li.cursor-pointer").on("click", function () {
    console.log("Click detected");

    // Toggle class untuk mengubah background color dan border
    $(this).toggleClass("bg-primary-500 hover:bg-primary-800 border-primary-500");

    // Toggle checkbox state
    const checkbox = $(this).find('input[type="checkbox"]');
    checkbox.prop("checked", !checkbox.prop("checked"));
  });

  let currentPreferenceIndex = 1;
  const totalProgressWidth = 100;

  function updatePreferences() {
    const preferenceItems = $("#preferenceList > li");
    const totalPreferences = preferenceItems.length;
    let preferenceChanged = true;

    // Update tampilan elemen berdasarkan preferensi aktif
    preferenceItems.each(function (index) {
      let isCurrentPreference = currentPreferenceIndex === index + 1;
      const previousPreferenceIndex = currentPreferenceIndex - 1;

      if (previousPreferenceIndex === index + 1) {
        const preferenceCheckboxes = $(this).find("input[name='preferences[]']");

        // Periksa apakah ada checkbox yang dicentang
        const hasCheckedItem = preferenceCheckboxes.is(":checked");

        if (!hasCheckedItem) {
          currentPreferenceIndex--;
          preferenceChanged = false;
          isCurrentPreference = false;
          $("#message p").text("Pilihlah preferensimu terlebih dahulu sebelum melanjutkan!!");
        } else {                 
          $("#message p").text("");          
        }
      }

      if (isCurrentPreference) {
        // Update lebar progress bar
        const currentProgressWidth = (totalProgressWidth * currentPreferenceIndex) / totalPreferences;
        $("#progressBar").css("width", `${currentProgressWidth}%`);
      }

      if (preferenceChanged) {        
        $(this).toggleClass("translate-x-full", !isCurrentPreference);   
        setTimeout(() => {
          $(this).toggleClass("hidden", !isCurrentPreference);                    
        }, 690);
      }
    });
  }

  $("#btnNext").on("click", function () {
    const preferenceItems = $("#preferenceList > li");    
    if (currentPreferenceIndex < preferenceItems.length) {
      currentPreferenceIndex++;
      updatePreferences();

      if (currentPreferenceIndex == preferenceItems.length) {        
        $("#btnNext").addClass("hidden");
        $("button").removeClass("hidden");      
      } 
    }

    if (currentPreferenceIndex != 1) {
      $("#btnBack").removeClass("hidden");
    } else {
      $("#btnBack").addClass("hidden");
    }
  });

  $("#btnBack").on("click", function () {
    if (currentPreferenceIndex > 1) {
      currentPreferenceIndex--;
      updatePreferences();
                
      $("#btnNext").removeClass("hidden");
      $("button").addClass("hidden");            
    }

    if (currentPreferenceIndex ==  1) {
      $("#btnBack").addClass("hidden");      
    }
  });
});
