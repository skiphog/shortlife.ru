@if($errors->any())
    @push('scripts')
        <script>
          swal('Ошибка', '{{ $errors->all()[0] }}', 'error');
        </script>
    @endpush
@endif