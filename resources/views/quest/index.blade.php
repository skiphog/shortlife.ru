@extends('layouts.app')

@section('title', 'Свинг-квест')

@section('description', 'Свинг-квест')

@section('content')

    <form class="motto" id="quest" action="{{ route('quest') }}" method="post">
        @include('quest.question')
    </form>

@endsection

@push('scripts')
    <script>
      const quest = $('#quest');
      let send = true;
      quest.on('submit', function (e) {
        e.preventDefault();
        if (!send) {return;}

        $.ajax({
          type: 'post',
          url: quest.attr('action'),
          dataType: 'json',
          data: quest.serialize(),
          beforeSend: function () {
            send = false;
          },
          success: function (j) {

          },
          error: function () {
            swal(
              'Ответ неверный',
              'Попробуйте еще раз...',
              'error'
            )
          },
          complete: function () {
            send = true;
          }
        });

      });
    </script>
@endpush