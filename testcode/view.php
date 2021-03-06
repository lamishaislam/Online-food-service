<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="./tests/bootstrap.php" backupGlobals="false"
	backupStaticAttributes="true" colors="true" convertErrorsToExceptions="true"
	convertNoticesToExceptions="true" convertWarningsToExceptions="true"
	processIsolation="false" stopOnFailure="false" syntaxCheck="true">

	<testsuites>
		<testsuite name="VisualPhpUnit test suite">
			<directory>./tests</directory>
			<exclude>./tests/ExpectedFailureTest.php</exclude>
		</testsuite>
	</testsuites>

	<logging>
		<log type="coverage-html" target="./build/phpunit/coverage"
			title="VisualPhpUnit" charset="UTF-8" yui="true" highlight="true"
			lowUpperBound="35" highLowerBound="70" />
		<log type="coverage-xml" target="./build/phpunit/coverage.xml" />
		<log type="coverage-clover" target="./build/phpunit/clover.xml" />
		<log type="junit" target="./build/phpunit/junit.xml" logIncompleteSkipped="false" />
	</logging>
	<filter>
		<blacklist>
			<directory suffix=".php">./vendor</directory>
		</blacklist>
		<whitelist processUncoveredFilesFromWhitelist="true">
			<directory suffix=".php">./src</directory>
		</whitelist>
	</filter>
</phpunit>