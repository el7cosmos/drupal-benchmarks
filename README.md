PHPBench Benchmark Results
==========================

### suite: 133edbb6c877af097defe7ea008ec205ad94fd97, date: 2018-04-11, stime: 07:30:52

benchmark | subject | groups | params | revs | its | mem_peak | best | mean | mode | worst | stdev | rstdev | diff
 --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | --- | ---
UuidBench | benchPecl | Uuid | [] | 1000 | 5 | 778,272b | 6.275μs | 6.483μs | 6.393μs | 6.783μs | 0.185μs | 2.85% | 2.76x
UuidBench | benchDrupal | Uuid | [] | 1000 | 5 | 873,240b | 2.305μs | 2.347μs | 2.329μs | 2.389μs | 0.032μs | 1.38% | 1.00x
UuidBench | benchRamsey | Uuid | [] | 1000 | 5 | 1,033,280b | 6.127μs | 6.203μs | 6.206μs | 6.285μs | 0.054μs | 0.88% | 2.64x

#### Environment

provider | key | value
 --- | --- | ---
uname | os | Linux
uname | host | ubuntu-s-1vcpu-1gb-sgp1-01
uname | release | 4.13.0-38-generic
uname | version | #43-Ubuntu SMP Wed Mar 14 15:20:44 UTC 2018
uname | machine | x86_64
php | xdebug | no
php | version | 7.1.15-0ubuntu0.17.10.1
php | ini | /etc/php/7.1/cli/php.ini
php | extensions | Core, date, libxml, openssl, pcre, zlib, filter, hash, pcntl, Reflection, SPL, session, standard, PDO, xml, calendar, ctype, dom, mbstring, fileinfo, ftp, gettext, iconv, json, exif, Phar, posix, readline, shmop, SimpleXML, sockets, sysvmsg, sysvsem, sysvshm, tokenizer, uuid, wddx, xmlreader, xmlwriter, xsl, zip, Zend OPcache
opcache | extension_loaded | yes
opcache | enabled | no
unix-sysload | l1 | 0.04
unix-sysload | l5 | 0.04
unix-sysload | l15 | 0
vcs | system | git
vcs | branch | master
vcs | version | 1ed3373f5fb68c07af7894dc72340fdf14592dfd
baseline | nothing | 0.015974044799805
baseline | md5 | 0.32401084899902
baseline | file_rw | 2.2420883178711
