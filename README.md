PHPBench Benchmark Results
==========================

### suite: 133edb895be2a816b2edee5ffa8c862f2b2f95fe, date: 2018-04-08, stime: 13:23:15

benchmark | subject | groups | params | revs | its | mem_peak | best | mean | mode | worst | stdev | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- 
UuidBench | benchDrupalUuid | Uuid | [] | 1000 | 5 | 702,576b | 5.112μs | 5.223μs | 5.282μs | 5.339μs | 0.096μs | 1.83% | 1.00x
UuidBench | benchRamseyUuid4 | Uuid | [] | 1000 | 5 | 842,128b | 12.693μs | 13.065μs | 12.825μs | 13.582μs | 0.355μs | 2.72% | 2.50x

provider | key | value
 --- | --- | --- 
uname | os | Darwin
uname | host | abi.local
uname | release | 17.5.0
uname | version | Darwin Kernel Version 17.5.0: Mon Mar  5 22:24:32 PST 2018; root:xnu-4570.51.1~1/RELEASE_X86_64
uname | machine | x86_64
php | xdebug | no
php | version | 7.2.4
php | ini | /usr/local/etc/php/7.2/php.ini
php | extensions | Core, phpdbg_webhelper, date, libxml, openssl, pcre, sqlite3, zlib, bcmath, bz2, calendar, ctype, curl, dba, dom, hash, fileinfo, filter, ftp, gd, gettext, gmp, SPL, iconv, intl, json, ldap, mbstring, session, standard, odbc, pcntl, mysqlnd, PDO, pdo_dblib, pdo_mysql, PDO_ODBC, pdo_pgsql, pdo_sqlite, pgsql, Phar, posix, pspell, readline, Reflection, mysqli, shmop, SimpleXML, soap, sockets, sodium, exif, sysvmsg, sysvsem, sysvshm, tokenizer, wddx, xml, xmlreader, xmlrpc, xmlwriter, xsl, zip, Zend OPcache
opcache | extension_loaded | yes
opcache | enabled | yes
baseline | nothing | 0.02598762512207
baseline | md5 | 0.33187866210938
baseline | file_rw | 8.4269046783447

