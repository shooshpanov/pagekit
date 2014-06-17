<div class="uk-form-row">
    <label for="form2-post" class="uk-form-label">@trans('Post')</label>
    <div class="uk-form-controls">
        <select id="form2-post" class="uk-width-1-1" name="id">
            @foreach (posts as post)
            <option value="@post.id"@(params.id == post.id ? ' selected')>@post.title</option>
            @endforeach
        </select>
    </div>
</div>

<script>

    require(['jquery'], function($) {

        $('.js-linkpicker #form2-post').on('change', function() {
            $('.js-linkpicker #form2-url').val('@link?id=' + $(this).val());
        }).trigger('change');

    });

</script>