@if(Session::has('flash'))

    @push('scripts')
        <script>
          swal('УРА!!!', '{{ Session::get('flash') }}', 'success');
        </script>
    @endpush

@endif