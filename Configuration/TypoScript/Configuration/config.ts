config {
	no_cache = 0

	simulateStaticDocuments = 0
	tx_realurl_enable = 1
	absRefPrefix = /
	baseURL = {$plugin.tx_phoenix_template.settings.live.http}{$plugin.tx_phoenix_template.settings.live.url}/

	sendCacheHeaders = 1

	# Enable indexing
	index_enable = 1
	index_externals = 1
	index_metatags = 1

	cache_period = 43200

	spamProtectEmailAddresses = -7
	spamProtectEmailAddresses_atSubst = @<span style="display:none;">remove-this.</span>
	#spamProtectEmailAddresses_lastDotSubst = (punkt)
	pageTitleFirst = 1
	disablePrefixComment = 1

	removeDefaultJS = external
	inlineStyle2TempFile = 1

	intTarget =
	extTarget =

	disableImgBorderAttr = 1

	# Compress
	concatenateJs = {$plugin.tx_phoenix_template.settings.live.concatenateJs}
	concatenateCss = {$plugin.tx_phoenix_template.settings.live.concatenateCss}
	compressJs = {$plugin.tx_phoenix_template.settings.live.compressJs}
	compressCss = {$plugin.tx_phoenix_template.settings.live.compressCss}
}

[globalString = IENV:HTTP_HOST={$plugin.tx_phoenix_template.settings.dev.url}]
	# Overwrite configuration
	config.baseURL = {$plugin.tx_phoenix_template.settings.dev.http}{$plugin.tx_phoenix_template.settings.dev.url}/
	config.no_cache = 1
	config.disablePrefixComment = 0
	config.admPanel = 0
	concatenateJs = {$plugin.tx_phoenix_template.settings.dev.concatenateJs}
	concatenateCss = {$plugin.tx_phoenix_template.settings.dev.concatenateCss}
	compressJs = {$plugin.tx_phoenix_template.settings.dev.compressJs}
	compressCss = {$plugin.tx_phoenix_template.settings.dev.compressCss}
[global]

[globalString = IENV:HTTP_HOST={$plugin.tx_phoenix_template.settings.stage.url}]
	# Overwrite configuration
	config.baseURL = {$plugin.tx_phoenix_template.settings.stage.http}{$plugin.tx_phoenix_template.settings.stage.url}/
	concatenateJs = {$plugin.tx_phoenix_template.settings.stage.concatenateJs}
	concatenateCss = {$plugin.tx_phoenix_template.settings.stage.concatenateCss}
	compressJs = {$plugin.tx_phoenix_template.settings.stage.compressJs}
	compressCss = {$plugin.tx_phoenix_template.settings.stage.compressCss}
[global]