<div class="uk-form-row">
    <label for="form2-page" class="uk-form-label">@trans('Page')</label>
    <div class="uk-form-controls">
        <select id="form2-page" class="uk-width-1-1" name="id">
            @foreach (pages as page)
            <option value="@page.id"@(params.id == page.id ? ' selected')>@page.title</option>
            @endforeach
        </select>
    </div>
</div>

<script>

    require(['jquery'], function($) {

        $('.js-linkpicker #form2-page').on('change', function() {
            $('.js-linkpicker #form2-url').val('@link?id=' + $(this).val());
        }).trigger('change');

    });

</script>