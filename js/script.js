
(function ($) {

  Drupal.behaviors.openEduSchools= {
    attach: function(context) {

      $('.show-depts').click(function(e) {
        $(this).parents('.views-field-nothing').toggleClass('closed');
      });
    }
  };

})(jQuery);

// Drupal.behaviors.openEduSchoolsSorting= {
//   attach: function(context) {
//
//     var course = document.getElementsByClassName("course-list");
//     var sortable = Sortable.create(course);
//   }
// };

// Sorting the courses, programs, and departments
// var course = document.getElementsByClassName('course-list');
// var sortable = Sortable.create(course);
