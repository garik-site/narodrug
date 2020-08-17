��    /      �  C           v     (   �  �   �     �     �     �     �     �     �          "     /     G     X     p     �  �   �     �  !   �  
   �     �     �     �     �     �     �  �     �   �  �   s	  4   M
  >   �
  -   �
     �
     �
  V     x   d  4   �  t     |  �       &        /     4     :     R     Z  �  `  �   �  j   �  �  $  )   �        2     '   @     h  H   �  6   �  8     "   ?     b  @   {  "   �     �    �       0        >     T     l          �  ,   �     �  �   �  ,  �  &  �  I     R   e  X   �       '     �   G  �   �  `   �  �   *             R   %      x   
   �      �   
   �      �             (      .      #                          !      &            *                             ,   /      	          %                     "                +   -   '                                        $   )   
                    <code>define( "WP_CACHE", true );</code> is not in wp-config.php. Either click "Attempt Fix" or add the code manually. A simple caching plugin that just works. Allows you to add URL(s) to be exempt from page caching. One URL per line. URL(s) can be full URLs (http://google.com) or absolute paths (/my/url/). You can also use wildcards like so /url/* (matches any url starting with /url/). Attempt Fix Compression Enable Advanced Mode Enable Caching Enable Compression Enable In-Memory Object Caching Enable Page Caching Enable Regex Enable gzip Compression Exception URL(s) Expire page cache after Expire the cache after In Memory Cache Neither <a href="https://pecl.php.net/package/memcached">Memcached</a>, <a href="https://pecl.php.net/package/memcache">Memcache</a>, nor <a href="https://pecl.php.net/package/redis">Redis</a> PHP extensions are set up on your server. No Object Cache (Redis or Memcached) Page Cache Purge Cache Save Changes Settings Simple Cache Simple Cache Purge Interval Simple Cache Settings Simple Cache could not create the necessary config file. Either click "Attempt Fix" or add the following code to <code>%s</code>: Simple Cache could not write advanced-cache.php to your wp-content directory or the file has been tampered with. Either click "Attempt Fix" or add the following code manually to <code>wp-content/advanced-cache.php</code>: Simple Cache could not write object-cache.php to your wp-content directory or the file has been tampered with. Either click "Attempt Fix" or add the following code manually to <code>wp-content/object-cache.php</code>: Simple Cache has encountered the following error(s): Simple Cache is not able to write data to the cache directory. Simple Cache won't work until you turn it on. Taylor Lovett Turn On Caching Turn this on to get started. This setting turns on caching and is really all you need. When enabled pages will be gzip compressed at the PHP level. Note many hosts set up gzip compression in Apache or nginx. When enabled, entire front end pages will be cached. When enabled, pages will be compressed. This is a good thing! This should always be enabled unless it causes issues. When enabled, things like database query results will be stored in memory. Memcached and Redis are suppported. Note that if the proper <a href='http://pecl.php.net/package/memcached'>Memcached</a>, <a href='http://pecl.php.net/package/memcache'>Memcache</a>, or <a href='https://pecl.php.net/package/redis'>Redis</a> PHP extensions aren't loaded, they won't show as options below. Yes You need a higher level of permission. days hours http://taylorlovett.com minutes weeks PO-Revision-Date: 2020-06-22 11:36:49+0000
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
Plural-Forms: nplurals=3; plural=(n % 10 == 1 && n % 100 != 11) ? 0 : ((n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14)) ? 1 : 2);
X-Generator: GlotPress/3.0.0-alpha
Language: ru
Project-Id-Version: Plugins - Simple Cache - Development (trunk)
 Константа <code>define( "WP_CACHE", true );</code> не определена в wp-config.php. Нажмите "Попробовать исправить" или добавьте код вручную. Очень простой кеширующий плагин, который просто работает. Позволяет добавлять URL для исключения их страничного кэширования. Один URL на строку. URL могут быть полными (http://google.com) или абсолютным путем (/my/url/). Также можно использовать маски, как например /url/* (подходит для любого URL начинающегося с /url/). Попробовать исправить Сжатие Включить расширенный режим Включить кэширование Включить сжатие Включить кэширование объектов в память Включить кэширование страниц Включить регулярные выражения Включить сжатие gzip Исключение URL Время кэша страницы истекает через Кеш истекает через Кеш в памяти Расширения PHP <a href="https://pecl.php.net/package/memcached">Memcached</a>, <a href="https://pecl.php.net/package/memcache">Memcache</a> или <a href="https://pecl.php.net/package/redis">Redis</a> не были найдены у вас на сервере. Нет Кэш объектов (Redis или Memcached) Кеш страниц Очистить кэш Сохранить Настройки Simple Cache Интервал очистки Simple Cache Настройки Simple Cache Simple Cache не смог создать нужный файл конфигурации. Нажмите "Попробовать исправить" или добавьте следующий код в <code>%s</code>: Simple Cache не смог записать файл advanced-cache.php в папке wp-content или этот файл был изменен. Нажмите "Попробовать исправить" или добавьте следующий код в <code>wp-content/advanced-cache.php</code>: Simple Cache не смог создать файл object-cache.php в папке wp-content или этот файл был изменен. Нажмите "Попробовать исправить" или добавьте следующий код в <code>wp-content/object-cache.php</code>: Simple Cache столкнулся со следующей ошибкой: Simple Cache не может записать данные в папку кэша. Simple Cache не будет работать пока Вы его не включите Taylor Lovett Включить кэширование Включите эту настройку чтобы начать. Она разрешит кэширование и это всё что вам нужно! При включении страницы будут сжиматься gzip на уровне PHP. Внимание! Хост может уже использовать сжатие gzip на уровне Apache или nginx. При включении все страницы сайта будут кэшироваться При включении настройки страницы будут сжиматься. Это хорошо и должно быть включено если только не доставляет проблем. При включении такие вещи, как например, запросы в БД будут кэшироваться в память. Сейчас поддерживаются Memcached или Redis. Если нужные расширения PHP <a href='http://pecl.php.net/package/memcached'>Memcached</a>, <a href='http://pecl.php.net/package/memcache'>Memcache</a> или <a href='https://pecl.php.net/package/redis'>Redis</a> не загружены то они не будут показаны в настройках Да Вам требуется более высокий уровень доступа. дней часов http://taylorlovett.com минут недель 