# Define the page
page = PAGE

# Include jQuery from core
page.javascriptLibs {
	jQuery = {$plugin.tx_phoenix_template.settings.javascript.jquery.enable}
	jQuery {
		version = {$plugin.tx_phoenix_template.settings.javascript.jquery.version}
		source = {$plugin.tx_phoenix_template.settings.javascript.jquery.source}
		noConflict = {$plugin.tx_phoenix_template.settings.javascript.jquery.noConflict}
	}
}

# Google Analytics
[globalVar = LIT:1 = {$plugin.tx_phoenix_template.settings.analytics.enable}]
page.headerData.68567 = TEXT
page.headerData.68567.value (
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '{$plugin.tx_phoenix_template.settings.analytics.UACode}', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');
</script>
)
[global]
