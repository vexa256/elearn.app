$(function () {

	$('textarea.editor').ckeditor();


  $('.editable').ckeditor();
  $('.card-header-right').hide();


 $(".table").DataTable(), $("#datatable-buttons").DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "colvis"]
    }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")






$(".numericd").keypress(function(event) {
  // Backspace, tab, enter, end, home, left, right
  // We don't support the del key in Opera because del == . == 46.
  var controlKeys = [8, 9, 13, 35, 36, 37, 39];
  // IE doesn't support indexOf
  var isControlKey = controlKeys.join(",").match(new RegExp(event.which));
  // Some browsers just don't raise events for control keys. Easy.
  // e.g. Safari backspace.
  if (!event.which || // Control keys in most browsers. e.g. Firefox tab is 0
      (49 <= event.which && event.which <= 57) || // Always 1 through 9
      (48 == event.which && $(this).attr("value")) || // No 0 first digit
      isControlKey) { // Opera assigns values for control keys.
    return;
  } else {
    event.preventDefault();
  }
});




$('input.numericd').on('keyup', function() {
    limitText(this, 1)
});

function limitText(field, maxChar){
    var ref = $(field),
        val = ref.val();
    if ( val.length >= maxChar ){
        ref.val(function() {
            console.log(val.substr(0, maxChar))
            return val.substr(0, maxChar);       
        });
    }
}


$(document).on( "click", ".DeleteCourse", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this Course, This action is not reversible (Use this action with caution)",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});



$(document).on( "click", ".DeleteExam", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this Exam, This action is not reversible (Use this action with caution)",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});




$(document).on( "click", ".DeleteUser", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to delete this User account, This action is not reversible (Use this action with caution)",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});


$(document).on( "click", ".Reattempt", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to re-attempt this Exam, You will lose all your current exam data related to this exam, This action is not reversible (Use this action with caution)",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});


$(document).on( "click", ".DeleteCourseNotes", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to Delete the selected Course Notes, This action is not reversible (Use this action with caution)",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete !'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});



$(document).on( "click", ".DeleteAdmin", function() {

    var route = $(this).data('route');



 Swal.fire({
  title: 'Are you sure?',
  text: "You would like to Delete this admin account, This action is not reversible (Use this action with caution)",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete !'
}).then((result) => {
  if (result.value) {

    window.location = route;
    
  }
})
  

});



  });

