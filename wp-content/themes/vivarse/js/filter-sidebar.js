/*
  Filter sidebar JS stuff
*/

var filter = document.getElementById("filter-popup");


jQuery(document).ready(function() {
    filterOptions();
    initialSelectedRadio();
    initDatepickers();
});



/* Odpri/zapri filter okno */
function toggleFilter() {

  if (filter.style.display === 'none') {
    filter.style.display = 'block';
  }

  else {
    filter.style.display = 'none';
  }

}


/* Dynamic filter options */
function filterOptions() {

  jQuery('input[type=radio]').change(function() {

    jQuery("#event-options").hide();
    jQuery("#post-options").hide();

      if (this.value == 'event') {
          console.log("Selected EVENT");
          jQuery("#event-options").show();
      }
      else if (this.value == 'post') {
          console.log("Selected POSTS");
          jQuery("#post-options").show();
      }
  });
}


/* Poglej, če je že kak GET parameter v url-ju / shrani označene radio btn */
function initialSelectedRadio() {

  var vivarse_post_type = findGetParameter('vivarse-post-type');
  var vivarse_event_category = findGetParameter('vivarse-event-category');

  console.log("Checked categories: ", typeof(vivarse_event_category));

  if (vivarse_post_type === 'event') {
    jQuery('input[type=radio][value=event]').prop('checked', true);
    jQuery("#event-options").show();
  }

  else if (vivarse_post_type === 'post') {
    jQuery('input[type=radio][value=post]').prop('checked', true);
    jQuery("#post-options").show();
  }
}


/*
  Find currently selected filter options (GET URL PARSING)
  From stackoverflow: https://tinyurl.com/ycche6zw
*/
function findGetParameter(parameterName) {

    var result = null,
        tmp = [];

    location.search
        .substr(1)
        .split("&")
        .forEach(function (item) {
          tmp = item.split("=");
          if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
        });

    return result;
}


/* Nastavi datepickerje */
function initDatepickers() {
  /* to je grdo af, ampak jbg- cajt */

  jQuery("#datepicker").datepicker({
    dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
  });

  jQuery("#datepicker-post").datepicker({
    dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
  });
}
