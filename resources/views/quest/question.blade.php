<?php
/**
 * @var \App\Question $quest
 */
?>
<h3>{{ $quest->title }}</h3>

{!! $quest->content !!}

<input type="hidden" name="question_id" value="{{ $quest->id }}">
<div class="form-group">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <input type="text" name="content" placeholder="Введите ответ" class="form-control">
        </div>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-fill btn-danger">Ответить</button>
</div>