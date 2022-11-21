<!-- JS Start here -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
</script>
<!-- Bootstrap JS -->
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
<!-- Custome js -->
<script src="{{ asset('admin/js/custom.js') }}"></script>

<!-- Data Tables JS -->
<script src="{{ asset('admin/js/datatables.min.js') }}"></script>
<script src="{{ asset('admin/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/datatables-init.js') }}"></script>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    var editor = CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form',
        allowedContent: true
    });
    editor.on('required', function(evt) {
        editor.showNotification('This field is required.', 'warning');
        evt.cancel();
    });
</script>
