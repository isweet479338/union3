 if ($('#validate_form').length > 0) {
        $('#validate_form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    }

    $('#validate_form').on('submit', function(e) {
        e.preventDefault();
        $('.submit').hide();
        $('.submiting').show();
        $(".ajax_error").remove();
        var submit_url = $('#validate_form').attr('action');
        //Start Ajax
        var formData = new FormData($("#validate_form")[0]);
      
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function(data) {
              if(data.status == 'danger'){
                   warning_audio();
                       $.notify({
                         icon: "nc-icon nc-app",
                         message: data.message

                     }, {
                         type: type[4],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                     setTimeout(function() {

                             window.location.href = data.dangoto;
                         }, 2500); 
                   
                  }
            else {
                   success_audio();
                $.notify({
                         icon: "nc-icon nc-app",
                         message: data.message

                     }, {
                         type: type[2],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                $('.submit').show();
                $('.submiting').hide();

               if(data.stepOver) {
                        $('.first_step').hide();
                        $('.second_step').html(data.stepOver);

                        $(".travel").addClass("frist");
                        $(".departure").removeClass("frist");
                        form_ajax();
                    }

                    if (data.goto) {
                         setTimeout(function() {

                             window.location.href = data.goto;
                         }, 2500);
                     }
            }
            },
            error: function(data) {
                var jsonValue = $.parseJSON(data.responseText);
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i]
                        const message = errors[first_item][0];
                        if ($('#' + first_item).length>0) {
                        $('#' + first_item).parsley().removeError('required', {
                            updateClass: true
                        });
                        $('#' + first_item).parsley().addError('required', {
                            message: value,
                            updateClass: true
                        });
                      }
                        // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                    $.notify({
                         icon: "nc-icon nc-app",
                         message: value

                     }, {
                         type: type[4],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                        i++;
                    });
                } else {
                    $.notify({
                         icon: "nc-icon nc-app",
                         message: jsonValue.message

                     }, {
                         type: type[4],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
             
                }
                   warning_audio();
                // _componentSelect2Normal();
                $('.submit').show();
                $('.submiting').hide();
                $('.pageloader').hide();
            }
        });
    });

//

 function  form_ajax(){
 if ($('.validate_form').length > 0) {
        $('.validate_form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    }
    $('.validate_form').on('submit', function(e) {
        e.preventDefault();
        $('.submit').hide();
        $('.submiting').show();
        $(".ajax_error").remove();
        var submit_url = $('.validate_form').attr('action');
        //Start Ajax
        var formData = new FormData($(".validate_form")[0]);
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function(data) {
              if(data.status == 'danger'){
                   warning_audio();
                 
                      $.notify({
                         icon: "nc-icon nc-app",
                         message: data.message

                     }, {
                         type: type[4],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                   
                  }
            else {
                   success_audio();
                  $.notify({
                         icon: "nc-icon nc-app",
                         message: data.message

                     }, {
                         type: type[2],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                $('.submit').show();
                $('.submiting').hide();
               if(data.stepOver) {
                        $('.first_step').hide();
                        $('.second_step').hide();
                        $(".third_step").show();
                        $('.third_step').html(data.stepOver);
                        $(".package").addClass("frist");
                        $(".travel").removeClass("frist");
                        form_third();
                    }
            }
            },
            error: function(data) {
                var jsonValue = $.parseJSON(data.responseText);
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i]
                        const message = errors[first_item][0];
                        if ($('#' + first_item).length>0) {
                        $('#' + first_item).parsley().removeError('required', {
                            updateClass: true
                        });
                        $('#' + first_item).parsley().addError('required', {
                            message: value,
                            updateClass: true
                        });
                      }
                        // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                      
                          $.notify({
                         icon: "nc-icon nc-app",
                         message: value

                     }, {
                         type: type[4],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                        i++;
                    });
                } else {
                      $.notify({
                         icon: "nc-icon nc-app",
                         message: jsonValue.message

                     }, {
                         type: type[4],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                 
             
                }
                   warning_audio();
                // _componentSelect2Normal();
                $('.submit').show();
                $('.submiting').hide();
            }
        });
    });
 }

 ///

  $(document).on('click','.previous_step',function(){
           $('.back1').show();
           $('.back').hide();
           var model_id=$('#model_id').val();
         $.ajax({
              method:'GET',
              url: '/admin/back_first_step',
              data: {
              model_id: model_id
               },
              dateType: 'html',
              success: function(data){
                _useselect2();
                $('.back1').hide();
                $('.back').show();
                $('.first_step').show();
                $('.first_step').html('');
                $('.second_step').hide();
                $('.second_step').html('');
                $('.first_step').html(data);
                $(".travel").removeClass("frist");
                $(".departure").addClass("frist");
                step_one();
                }
            });
 })

  $(document).on('click','.previous_step2',function(){
           $('.back1').show();
           $('.back').hide();
           var model_id=$('#model_id').val();
         $.ajax({
              method:'GET',
              url: '/admin/back_second_step',
              data: {
              model_id: model_id
               },
              dateType: 'html',
              success: function(data){
                $('.back1').hide();
                $('.back').show();
                $('.first_step').hide();
                $('.third_step').html('');
                $('.third_step').hide();
                $('.second_step').show();
                $('.second_step').html(data);
                $(".travel").removeClass("frist");
                $(".departure").addClass("frist");
                form_ajax();
                }
            });
 })  

//
function step_one(){
  if ($('.validate_form1').length > 0) {
        $('.validate_form1').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    }

    $('.validate_form1').on('submit', function(e) {
        e.preventDefault();
        $('.submit').hide();
        $('.submiting').show();
        $(".ajax_error").remove();
        var submit_url = $('.validate_form1').attr('action');
        //Start Ajax
        var formData = new FormData($(".validate_form1")[0]);
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function(data) {
              if(data.status == 'danger'){
                   warning_audio();
                 $.notify({
                         icon: "nc-icon nc-app",
                         message: data.message

                     }, {
                         type: type[4],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                      setTimeout(function() {

                             window.location.href = data.dangoto;
                         }, 2500); 
                  }
            else {
                   success_audio();
                 $.notify({
                         icon: "nc-icon nc-app",
                         message: data.message

                     }, {
                         type: type[2],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                $('.submit').show();
                $('.submiting').hide();
               if(data.stepOver) {
                        $('.first_step').hide();
                        $('.second_step').show();
                        $('.second_step').html(data.stepOver);
                        $(".travel").addClass("frist");
                        $(".departure").removeClass("frist");

                        form_ajax();
                    }
            }
            },
            error: function(data) {
                var jsonValue = $.parseJSON(data.responseText);
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i]
                        const message = errors[first_item][0];
                        if ($('#' + first_item).length>0) {
                        $('#' + first_item).parsley().removeError('required', {
                            updateClass: true
                        });
                        $('#' + first_item).parsley().addError('required', {
                            message: value,
                            updateClass: true
                        });
                      }
                        // $('#' + first_item).after('<div class="ajax_error" 
                    $.notify({
                         icon: "nc-icon nc-app",
                         message: value

                     }, {
                         type: type[4],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                        i++;
                    });
                } else {
                     $.notify({
                         icon: "nc-icon nc-app",
                         message: jsonValue.message

                     }, {
                         type: type[3],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
             
                }
                   warning_audio();
                // _componentSelect2Normal();
                $('.submit').show();
                $('.submiting').hide();
                
            }
        });
    });
}
//
function  form_third(){

  if ($('.form_third').length > 0) {
        $('.form_third').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    }
    $('.form_third').on('submit', function(e) {
        e.preventDefault();
        $('.submit').hide();
        $('.submiting').show();
        $(".ajax_error").remove();
        var submit_url = $('.form_third').attr('action');
        //Start Ajax
        var formData = new FormData($(".form_third")[0]);
        $.ajax({
            url: submit_url,
            type: 'POST',
            data: formData,
            contentType: false, // The content type used when sending data to the server.
            cache: false, // To unable request pages to be cached
            processData: false,
            dataType: 'JSON',
            success: function(data) {
              if(data.status == 'danger'){
                    
                       $.notify({
                         icon: "nc-icon nc-app",
                         message: data.message

                     }, {
                         type: type[3],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                      warning_audio();
                  }
            else {
                   success_audio();
                  $.notify({
                         icon: "nc-icon nc-app",
                         message: data.message

                     }, {
                         type: type[2],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });

                $('.submit').show();
                $('.submiting').hide();
               if(data.stepOver) {
                        $('.second_step').hide();
                        $('.third_step').hide();
                        $(".first_step").show();
                        $('.first_step').html('');
                        $('.first_step').html(data.stepOver);
                        step_one();
                    }
            }
            },
            error: function(data) {
                var jsonValue = $.parseJSON(data.responseText);
                const errors = jsonValue.errors;
                if (errors) {
                    var i = 0;
                    $.each(errors, function(key, value) {
                        const first_item = Object.keys(errors)[i]
                        const message = errors[first_item][0];
                        if ($('#' + first_item).length>0) {
                        $('#' + first_item).parsley().removeError('required', {
                            updateClass: true
                        });
                        $('#' + first_item).parsley().addError('required', {
                            message: value,
                            updateClass: true
                        });
                      }
                        // $('#' + first_item).after('<div class="ajax_error" style="color:red">' + value + '</div');
                        $.notify({
                         icon: "nc-icon nc-app",
                         message: value

                     }, {
                         type: type[3],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });
                        i++;
                    });
                } else {
                       $.notify({
                         icon: "nc-icon nc-app",
                         message: jsonValue.message

                     }, {
                         type: type[3],
                         timer: 8000,
                         placement: {
                             from: 'top',
                             align: 'right'
                         }
                     });             
                }
                   warning_audio();
                // _componentSelect2Normal();
                $('.submit').show();
                $('.submiting').hide();
            }
        });
    });
 }

 //second
$(document).on('click', '#add_member', function() {
        var row_index = $('#variation_counter').val();
        var action = $(this).attr('data-action');
        $("#add_member").hide();
        $("#checking").show();
    $.ajax({
            method: 'GET',
            url: '/admin/get_packege_option',
            data: {
                row_index:row_index,
            },
            dataType: 'html',
            success: function(result) {
                if (result) {
                    $("#add_member").show();
                     $("#checking").hide();
                     $('#table_append').append(result);
                    $('#variation_counter').val(parseInt(row_index) + 1);
                    $('.select').select2();
                }
            },
        });
    });
      //

    $(document).on('click', '.add_variation_value_row', function() {

        var row = $(this).data('id');
        var variation_id =parseInt($("#variation_id_"+row).val());
        $.ajax({
            method: 'GET',
            url: '/admin/get_variation_value_row',
            data: {
                variation_id:variation_id,
                row:row,
            },
            dataType: 'html',
            success: function(result) {

                if (result) {
                      $("#variation_id_"+row).val(variation_id+1)
                      $("#itinary_option_"+row).append(result);
                }
            },
        });
    });


    $(document).on('click', '.remove_variation_value_row', function() {
        var row =$(this).data('id');
         var count = $(this)
                    .closest('table')
                    .find('.remove_variation_value_row').length;
                if (count === 1) {
                    $("#itinary_option_"+row).closest('table')
                        .remove();
                } else {
                    $(this)
                        .closest('tr')
                        .remove();
                }
    });
