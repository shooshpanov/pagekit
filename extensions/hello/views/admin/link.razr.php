<div class="uk-form-row">
    <label for="form2-name" class="uk-form-label">@trans('Name')</label>
    <div class="uk-form-controls">
        <input id="form2-name" class="uk-width-1-1" name="name" value="@params.name" type="text" placeholder="@trans('Hello World')">
    </div>
</div>

<script>

    require(['jquery'], function($) {

        $('.js-linkpicker #form2-name').on('change', function() {
            $('.js-linkpicker #form2-url').val('@link?name=' + $(this).val());
        }).trigger('change');

    });

</script>