</div> <!-- .div wrapper -->
 <!-- Main Footer -->
      <footer class="main-footer">
            <div class="row">
                <div class="col-sm-6">
                        <b>Copyrights to Masria Group  </b>
                </div>
                <div class="col-sm-6 text-left">
                        <b>Powered by <a href="http://www.technomasr.com"> Technomasr</a>  &copy; 2019  </b>
                </div>
               
            </div>   
      </footer>


      
    <!-- REQUIRED JS SCRIPTS -->
   
    <!-- jQuery -->
    <script type="text/javascript" src="dist/js/jquery.min.js"></script>

    <!-- TinyMCE -->
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/tinymce/tinymce.js"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="{{ URL::to('/') }}/AdminAssets/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::to('/') }}/AdminAssets/dist/js/app.min.js"></script>

     <!--tooltip -->
     <script src="{{ URL::to('/') }}/AdminAssets/plugins/tooltip/tooltip.js"></script>
     <!-- Select Plugin Js -->
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ URL::to('/') }}/AdminAssets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ URL::to('/') }}/AdminAssets/plugins/node-waves/waves.js"></script>

<!-- SweetAlert Plugin Js -->
<script src="{{ URL::to('/') }}/AdminAssets/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Dropzone Plugin Js -->
<script src="{{ URL::to('/') }}/AdminAssets/plugins/dropzone/dropzone.js"></script>

<!-- Autosize Plugin Js -->
<script src="{{ URL::to('/') }}/AdminAssets/plugins/autosize/autosize.js"></script>

<!-- Moment Plugin Js -->
<script src="{{ URL::to('/') }}/AdminAssets/plugins/momentjs/moment.js"></script>
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ URL::to('/') }}/AdminAssets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Jquery DataTable Plugin Js -->
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/jquery-datatable/jquery.dataTables.ar.js"></script>
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="{{ URL::to('/') }}/AdminAssets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- data range picker -->
<script type="text/javascript" src="{{ URL::to('/') }}/AdminAssets/plugins/daterangepicker/moment.js"></script>
<script type="text/javascript" src="{{ URL::to('/') }}/AdminAssets/plugins/daterangepicker/daterangepicker.js"></script>

<!-- TinyMCE -->
<script src="{{ URL::to('/') }}/AdminAssets/plugins/tinymce/tinymce.js"></script>
<!-- file input -->
<script src="{{ URL::to('/') }}/AdminAssets/plugins/bootstrap-fileinput/js/fileinput.js"></script>

<!-- Custom Js -->
<script src="{{ URL::to('/') }}/AdminAssets/dist/js/admin.js"></script>
<script src="{{ URL::to('/') }}/AdminAssets/dist/js/pages/tables/jquery-datatable.js"></script>
<script src="{{ URL::to('/') }}/AdminAssets/dist/js/pages/forms/basic-form-elements.js"></script>

<!-- Demo Js -->

        <script src="{{ URL::to('/') }}/AdminAssets/dist/js/pages/ui/dialogs-ar.js"></script>
    <script src="{{ URL::to('/') }}/AdminAssets/dist/js/pages/ui/tooltips-popovers.js"></script>


    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->

        



<script type="text/javascript">
    $(function () {

        //TinyMCE
        tinymce.init({
            selector: "textarea#tinymce",
            theme: "modern",
            height: 300,
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
        tinymce.suffix = ".min";
        tinyMCE.baseURL = 'plugins/tinymce';
    });
</script>

    <script type="text/javascript">
    $(document).ready(function () {
        Dropzone.autoDiscover = false;
        $("#dZUpload").dropzone({
            url: "hn_SimpeFileUploader.ashx",
            addRemoveLinks: true,
            success: function (file, response) {
                var imgName = response;
                file.previewElement.classList.add("dz-success");
                console.log("Successfully uploaded :" + imgName);
            },
            error: function (file, response) {
                file.previewElement.classList.add("dz-error");
            }
        });
    });
</script>

<script>
    $("#file-1").fileinput({
        language: 'ar',
        showUpload: false,
        showCaption: false,
        browseClass: "btn bg-blue-grey",
        fileType: "image",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: true,
        initialPreviewAsData: true,
    });  
    $("#file-2").fileinput({
        language: 'ar',
        showUpload: false,
        showCaption: false,
        browseClass: "btn bg-blue-grey",
        fileType: "image",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: true,
        initialPreviewAsData: true,
       
    });  
</script>


<script language="javascript">
function printdiv(printpage)
{
    var headstr = "<html><head><title></title></head><body>";
    var footstr = "</body>";
    var newstr = document.all.item(printpage).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr+newstr+footstr;
    window.print();
    document.body.innerHTML = oldstr;
    return false;
}
    /*$("form").submit(function() {
            // submit more than once return false
            $(this).submit(function() {
                return false;
            });
            // submit once return true
            return true;
        });
    });*/

    /* or */

    jQuery('form').submit(function(){
        $(this).find(':submit').attr( 'disabled','disabled' );
        //onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();"
    });
</script>
<script>
	jQuery(function(jQuery) {
		jQuery('.repeatable-field-add').click(function() {
			var theField = jQuery(this).closest('div.repeatable-wrap').find('.repeatable-fields-list li:last').clone(true);
			var theLocation = jQuery(this).closest('div.repeatable-wrap').find('.repeatable-fields-list li:last');
			jQuery('input', theField).val('').attr('name', function(index, name) {
				return name.replace(/(\d+)/, function(fullMatch, n) {
					return Number(n) + 1;
				});
            });
            
			theField.insertAfter(theLocation, jQuery(this).closest('div.repeatable-wrap'));
			var fieldsCount = jQuery('.repeatable-field-remove').length;
			if (fieldsCount > 1) {
				jQuery('.repeatable-field-remove').css();
			}
			return false;
		});

		jQuery('.repeatable-field-remove').click(function() {
			jQuery(this).parent().remove();
			var fieldsCount = jQuery('.repeatable-field-remove').length;
			if (fieldsCount == 1) {
				jQuery('.repeatable-field-remove').css('display', 'none');
			}
			return false;
		});
	});
</script>

<script type="text/javascript">

$("#selectorList").change(function(){
	var choosen = $(this).find(':selected')[0].value;
	console.log(choosen);
	if (choosen === 'purchase') {
		$('#ifpurchase').show();
	}
	else $('#ifpurchase').hide();

    if (choosen === 'payment') {
		$('#ifpayment').show();
	}
	else $('#ifpayment').hide();

    if (choosen === 'comission') {
		$('#ifcomission').show();
	}
	else $('#ifcomission').hide();
});
$("#selectorList2").change(function(){
	var choosen = $(this).find(':selected')[0].value;
	console.log(choosen);
	if (choosen === 'fawry') {
		$('#iffawry').show();
	}
	else $('#iffawry').hide();
});
$("#PaymentMethod").change(function(){
	var choosen = $(this).find(':selected')[0].value;
	console.log(choosen);
	if (choosen === 'Fund') {
		$('#ifFund').show();
	}
	else $('#ifFund').hide();

    if (choosen === 'Bank') {
		$('#ifBank').show();
	}
	else $('#ifBank').hide();

    if (choosen === 'Check') {
		$('#ifCheck').show();
	}
	else $('#ifCheck').hide();
});


</script>
<script>
    // http://www.daterangepicker.com/#examples //

    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
    });


    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'اليوم': [moment(), moment()],
            'أمس': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'آخر 7 أيام': [moment().subtract(6, 'days'), moment()],
            'آخر 30 يوم': [moment().subtract(29, 'days'), moment()],
            'الشهر الحالى': [moment().startOf('month'), moment().endOf('month')],
            'الشهر السابق': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'السنة الحالية': [moment().subtract(1, 'month').startOf('year'), moment()],
            //'السنة السابقة': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);

    });

    $(function() {
        $('input[name="single"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'),10)
        }, function(start, end, label) {
            var years = moment().diff(start, 'years');
            
        });
        });
</script>


 <!--Quantity repeater Btn-->
 <script type="text/template" id="RepeatQuantityTPL">
            <div class="More">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <p><b>نوع الصنف</b></p>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">turned_in</i>
                            </span>
                            <div class="form-line">
                                <select class="form-control show-tick"  name="fr_options1" data-live-search="true">
                                    <option>إختيار </option>
                                    <option>إختيار </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <p><b> الصنف</b></p>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">turned_in</i>
                            </span>
                            <div class="form-line">
                                <select class="form-control show-tick"  name="fr_options2" data-live-search="true">
                                    <option>إختيار </option>
                                    <option>إختيار </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2  col-sm-6 col-xs-12">
                        <p><b>الكمية</b></p>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">layers</i>
                            </span>
                            <div class="form-line">
                                <input type="number"  name="fr_options3" class="form-control " >
                            </div>
                        </div>
                    </div>  
                    <div class="col-sm-3" style="margin-bottom: 0px;">
                        <span class="delete btn bg-red">
                            حذف
                        </span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                var max_fields          = 50;
                var wrapper             = $(".repeatableQuantitys");
                var add_button          = $(".add_Quantity");
                var RepeatOpponentTPL   = $("#RepeatQuantityTPL").html();

                var x = 1;
                $(add_button).click(function(e){
                    e.preventDefault();
                    if(x < max_fields){
                        x++;
                        $(wrapper).append(RepeatOpponentTPL); //add input box
                    }else{
                        alert('You Reached the limits')
                    }
                });

                $(wrapper).on("click",".delete", function(e){
                    e.preventDefault(); $(this).closest('.More').remove(); x--;
                })
            });
        </script>


  </body>
</html>
