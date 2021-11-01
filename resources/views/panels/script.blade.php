@if (in_array(Route::currentRouteName(), ['/','login', 'show_register', 'password.request', 'show_reset_form']))

@elseif (in_array(Route::currentRouteName(), ['home']))
<!-- Required vendors -->
<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/deznav-init.js') }}"></script>
<!-- Chart piety plugin files -->
<script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
<script src="https://clipboardjs.com/bower_components/highlightjs/highlight.pack.min.js"></script>
<script src="https://clipboardjs.com/dist/clipboard.min.js"></script>
<script src="https://clipboardjs.com/assets/scripts/tooltips.js"></script>

<script>
$(function(){
  var Clipboard = new ClipboardJS('.copy-text');
  Clipboard.on('success', function(e) {
	  e.clearSelection();console.info('Action:',e.action);console.info('Text:',e.text);console.info('Trigger:',e.trigger);showTooltip(e.trigger,'Copied!');
  });
});
</script>
@else
<!-- Required vendors -->
<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/deznav-init.js') }}"></script>
<!-- Chart piety plugin files -->
<script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
@endif