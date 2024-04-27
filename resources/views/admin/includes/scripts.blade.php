<script src="{{ asset('/') }}admin/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="{{ asset('/') }}admin/assets/bundles/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/datatables/datatables.min.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js">
</script>
<script src="{{ asset('/') }}admin/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/cleave-js/dist/cleave.min.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js">
</script>
<script src="{{ asset('/') }}admin/assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/summernote/summernote-bs4.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/codemirror/lib/codemirror.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/codemirror/mode/javascript/javascript.js"></script>
<script src="{{ asset('/') }}admin/assets/bundles/ckeditor/ckeditor.js"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('/') }}admin/assets/js/page/index.js"></script>
<script src="{{ asset('/') }}admin/assets/js/page/datatables.js"></script>
<script src="{{ asset('/') }}admin/assets/js/page/advance-table.js"></script>
<script src="{{ asset('/') }}admin/assets/js/page/forms-advanced-forms.js"></script>

<!-- Template JS File -->
<script src="{{ asset('/') }}admin/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="{{ asset('/') }}admin/assets/js/custom.js"></script>


<!--templet Discount Price Script Start -->
<script>
    $(document).ready(function() {

        $(".tempfree").click(function() {
            var discountAmount = $('#tempdiscountAmount').val();
            var price = $('#tempprice').val();
            var discountPrice = 0;
            $('#tempdiscountPrice').val(discountPrice);
        });

        $(".tempfixed").click(function() {
            var discountAmount = $('#tempdiscountAmount').val();
            var price = $('#tempprice').val();
            var discountPrice = price - discountAmount;
            $('#tempdiscountPrice').val(discountPrice);
        });

        $(".temppercent").click(function() {
            // alert('ok')
            var discountAmount = $('#tempdiscountAmount').val();
            var price = $('#tempprice').val();
            var discountPrice = price - price * discountAmount / 100;
            $('#tempdiscountPrice').val(discountPrice);
        });

    });
</script>
<!-- Discount Price Script End -->

<!-- in theme price  set product title get product info-->

<script>
    function setProductInfo(id) {
        $.ajax({
            type: "GET",
            url: "{{ route('get-product-info-by-title') }}",
            data: {id: id},
            dataType:"JSON",
            success:function (response) {
                // alert(response);
                    var option = '';
                    option +='<option value=" ">Set Category</option>';

                    $.each(response,function (key,value) {
                        option +='<option value="'+value.id+'">'+value.name+'</option>'
                    });

                    $('#subCategoryID').empty();
                    $('#CategoryId').append(option);
            }
        })
    }

</script>



<!--Basic Discount Price Script Start -->
<script>
    $(document).ready(function() {

        $(".bfixed").click(function() {
            var discountAmount = $('#bdiscountAmount').val();
            var price = $('#bprice').val();
            var discountPrice = price - discountAmount;
            $('#bdiscountPrice').val(discountPrice);
        });

        $(".bpercent").click(function() {
            // alert('ok')
            var discountAmount = $('#bdiscountAmount').val();
            var price = $('#bprice').val();
            var discountPrice = price - price * discountAmount / 100;
            $('#bdiscountPrice').val(discountPrice);
        });

    });
</script>
<!-- Discount Price Script End -->

<!--Pro Discount Price Script Start -->
<script>
    $(document).ready(function() {

        $(".propercent").click(function() {
            // alert('ok')
            var discountAmount = $('#prodiscountAmount').val();
            var price = $('#proprice').val();
            var discountPrice = price - price * discountAmount / 100;
            $('#prodiscountPrice').val(discountPrice);
        });
        $(".profixed").click(function() {
            var discountAmount = $('#prodiscountAmount').val();
            var price = $('#proprice').val();
            var discountPrice = price - discountAmount;
            $('#prodiscountPrice').val(discountPrice);
        });
    });
</script>
<!-- Discount Price Script End -->

<!--Premium Discount Price Script Start -->
<script>
    $(document).ready(function() {

        $(".prepercent").click(function() {
            // alert('ok')
            var discountAmount = $('#prediscountAmount').val();
            var price = $('#preprice').val();
            var discountPrice = price - price * discountAmount / 100;
            $('#prediscountPrice').val(discountPrice);
        });
        $(".prefixed").click(function() {
            var discountAmount = $('#prediscountAmount').val();
            var price = $('#preprice').val();
            var discountPrice = price - discountAmount;
            $('#prediscountPrice').val(discountPrice);
        });
    });
</script>
<!-- Discount Price Script End -->