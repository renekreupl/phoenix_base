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
	concatenateJs = 1
	concatenateCss = 1
	compressJs = 1
	compressCss = 1
}

config.sys_language_uid = 0
config.language = de
config.locale_all = de_DE.utf-8

[globalString = IENV:HTTP_HOST={$plugin.tx_phoenix_template.settings.dev.url}]
	# Overwrite configuration
	config.baseURL = {$plugin.tx_phoenix_template.settings.dev.http}{$plugin.tx_phoenix_template.settings.dev.url}/
	config.no_cache = 1
	config.concatenateJs = 0
	config.concatenateCss = 0
	config.compressJs = 0
	config.compressCss = 0
	config.disablePrefixComment = 0
	config.admPanel = 0
[global]

[globalString = IENV:HTTP_HOST={$plugin.tx_phoenix_template.settings.stage.url}]
	# Overwrite configuration
	config.baseURL = {$plugin.tx_phoenix_template.settings.stage.http}{$plugin.tx_phoenix_template.settings.stage.url}/
[global]