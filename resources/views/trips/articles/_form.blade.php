<div class="field">
    <label class="label" for="title">{{ __('Title') }}</label>
    <p class="control">
        <input type="text" class="input" name="title" id="title" value="{{ old('title', $article->title) }}">
    </p>
</div>

<div class="field">
    <label class="label" for="body">Body</label>
    <p class="control">
        <textarea class="textarea" id="body" name="body">{{ old('body', $article->body) }}</textarea>
    </p>
</div>

<div class="field">
    <p class="control">
        <label class="checkbox">
            {{ Form::checkbox('is_protected', 1, $article->is_protected) }}
            Contains protected information
        </label>
    </p>
    <p class="help">* Protected information cannot be synced to devices remotely</p>
</div>