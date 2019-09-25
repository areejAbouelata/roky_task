$(function () {
    $('.js-sweetalert button').on('click', function () {
        var type = $(this).data('type');
        if (type === 'basic') {
            showBasicMessage();
        }
        else if (type === 'with-title') {
            showWithTitleMessage();
        }
        else if (type === 'success') {
            showSuccessMessage();
        }
        else if (type === 'confirm') {
            showConfirmMessage();
        }
        else if (type === 'cancel') {
            showCancelMessage();
        }
        else if (type === 'with-custom-icon') {
            showWithCustomIconMessage();
        }
        else if (type === 'html-message') {
            showHtmlMessage();
        }
        else if (type === 'autoclose-timer') {
            showAutoCloseTimerMessage();
        }
        else if (type === 'prompt') {
            showPromptMessage();
        }
        else if (type === 'ajax-loader') {
            showAjaxLoaderMessage();
        }
      
        else if (type === 'edit-type') {
            showEdittype();
        }
    });
});

//These codes takes from http://t4t5.github.io/sweetalert/
function showBasicMessage() {
    swal("Here's a message!");
}

function showWithTitleMessage() {
    swal("Here's a message!", "It's pretty, isn't it?");
}

function showSuccessMessage() {
    swal("Good job!", "You clicked the button!", "success");
}

function showConfirmMessage(url) {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover these data or any relative data again!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, Cancel!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
                $.ajax({
                    method   : 'get',
                    url      : url,
                    dataType : 'json',
                    success : function(data){
                        if(data != "false"){
                            swal(
                                'Deleted Successfuly!',
                                'your data have been deleted successfuly from your database.',
                                'success'
                            )
                            $('#row_'+data).fadeOut();
                            $('#row_'+data).remove();
                        }else{
                            swal(
                                'Nothing Changed!',
                                'there was an error please contact customer service.',
                                'error'
                            )
                        }
                    }
                })
        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
    });
}

function showCancelMessage() {
    swal({
        title: "هل أنت متأكد",
        text: " لا يمكنك إسترجاع البيانات المحذوفة مرة اخرى !",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "مسح",
        cancelButtonText: "رجوع",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            swal("تم المسح ", "لا يمكنك استرجاع البيان المحذوف", "success");
        } else {
            swal("تم الإلغاء", " لم يتم مسح البيانات  :)", "error");
        }
    });
}

function showWithCustomIconMessage() {
    swal({
        title: "Sweet!",
        text: "Here's a custom image.",
        imageUrl: "../../images/thumbs-up.png"
    });
}

function showHtmlMessage() {
    swal({
        title: "HTML <small>Title</small>!",
        text: "A custom <span style=\"color: #CC0000\">html<span> message.",
        html: true
    });
}

function showAutoCloseTimerMessage() {
    swal({
        title: "Auto close alert!",
        text: "I will close in 2 seconds.",
        timer: 2000,
        showConfirmButton: false
    });
}

function showPromptMessage() {
    swal({
        title: "An input!",
        text: "Write something interesting:",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "Write something"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("You need to write something!"); return false
        }
        swal("Nice!", "You wrote: " + inputValue, "success");
    });
}

function showAjaxLoaderMessage() {
    swal({
        title: "Ajax request example",
        text: "Submit to run ajax request",
        type: "info",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
    }, function () {
        setTimeout(function () {
            swal("Ajax request finished!");
        }, 2000);
    });
}
function showEdittype() {
    swal({
        title: "تعديل نوع الصنف",
        type:"info",
        html:
            "You can use <b>bold text</b>, " +
            
            "and other HTML tags",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
    }, function () {
        setTimeout(function () {
            swal("تم التعديل بنجاح !");
        }, 2000);
    });
}

