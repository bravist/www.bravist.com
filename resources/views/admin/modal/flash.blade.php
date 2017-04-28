@section('javascript')
<script type="text/javascript">
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@endsection