<div style='background-color:#AFF'><h3>Encryption</h3><p><strong>PHP Version</strong></p><pre>5.6.40</pre><hr /><p><strong>Cryptor</strong></p><pre>OpenSSL</pre><hr /><p><strong>Cipher</strong></p><pre>bf-cbc</pre><hr /><p><strong>mb_internal_encoding</strong></p><pre>UTF-8</pre><hr /><div style='background-color:#AAA'><h3>IP Validation</h3><p><strong>$headers from get_ip()</strong></p><pre>Array
(
    [TE] => deflate,gzip;q=0.3
    [Connection] => TE, close
    [Host] => kennelgoforit.se
    [User-Agent] => SiteLock (Module: SmartDB; Source: https://www.sitelock.com/; Version: 1.0)
    [Content-Length] => 0
)
</pre><hr /><p><strong>IP Check started in</strong></p><pre>/home/taiimfhx/public_html/tmp/f4fba9a485443a94552a165071062c5e.php</pre><hr /><p><strong>IP Check started at</strong></p><pre>2022-06-07T16:01:18-04:00</pre><hr /><p><strong>The following IPs will be tested</strong></p><pre>Array
(
    [0] => 184.154.139.53
)
</pre><hr /><p><strong>mapi_post URL</strong></p><pre>https://mapi.sitelock.com/v3/connect/</pre><hr /><p><strong>mapi_post_request</strong></p><pre>Array
(
    [pluginVersion] => 100.0.0
    [apiTargetVersion] => 3.0.0
    [token] => 41cbdc8dda3e2e66b508882076ba291b
    [requests] => Array
        (
            [id] => 5b719a59aed8affee0758ef11f159a29-16546320785
            [action] => validate_ip
            [params] => Array
                (
                    [site_id] => 31602021
                    [ip] => 184.154.139.53
                )

        )

)
</pre><hr /><p><strong>mapi_request</strong></p><pre><textarea style="width:99%;height:100px;">eyJwbHVnaW5WZXJzaW9uIjoiMTAwLjAuMCIsImFwaVRhcmdldFZlcnNpb24iOiIzLjAuMCIsInRva2VuIjoiNDFjYmRjOGRkYTNlMmU2NmI1MDg4ODIwNzZiYTI5MWIiLCJyZXF1ZXN0cyI6eyJpZCI6IjViNzE5YTU5YWVkOGFmZmVlMDc1OGVmMTFmMTU5YTI5LTE2NTQ2MzIwNzg1IiwiYWN0aW9uIjoidmFsaWRhdGVfaXAiLCJwYXJhbXMiOnsic2l0ZV9pZCI6IjMxNjAyMDIxIiwiaXAiOiIxODQuMTU0LjEzOS41MyJ9fX0=</textarea></pre><hr /><p><strong>curl_getinfo()</strong></p><pre>Array
(
    [url] => https://mapi.sitelock.com/v3/connect/
    [content_type] => text/html; charset=UTF-8
    [http_code] => 200
    [header_size] => 756
    [request_size] => 458
    [filetime] => -1
    [ssl_verify_result] => 19
    [redirect_count] => 0
    [total_time] => 0.416415
    [namelookup_time] => 0.00037
    [connect_time] => 0.002575
    [pretransfer_time] => 0.008135
    [size_upload] => 320
    [size_download] => 509
    [speed_download] => 1222
    [speed_upload] => 768
    [download_content_length] => -1
    [upload_content_length] => 320
    [starttransfer_time] => 0.416178
    [redirect_time] => 0
    [redirect_url] => 
    [primary_ip] => 45.60.14.54
    [certinfo] => Array
        (
        )

    [primary_port] => 443
    [local_ip] => 185.76.64.30
    [local_port] => 42864
)
</pre><hr /><p><strong>mapi_response</strong></p><pre><textarea style="width:99%;height:100px;">{"apiVersion":"3.0.1","status":"ok","globalResponse":null,"banner":null,"forceLogout":false,"newToken":null,"now":1654632090,"responses":[{"id":"5b719a59aed8affee0758ef11f159a29-16546320785","data":{"ip_address":"184.154.139.53","valid":true},"raw_api_url":"https:\/\/api.sitelock.com\/v1\/41cbdc8dda3e2e66b508882076ba291b\/dbscan\/checkip","raw_response":{"@attributes":{"version":"1.1","encoding":"UTF-8"},"checkIP":{"status":"1"}},"raw_request":{"site_id":"31602021","ip":"184.154.139.53"},"status":"ok"}]}</textarea></pre><hr /><p><strong>Detected memory_limit</strong></p><pre>128M</pre><hr /><p><strong>Chunk Size</strong></p><pre>10485760</pre><hr /><div style='background-color:#AAF'><h3>CheckFeatures</h3><p><strong>Feature Code</strong></p><pre>db_scan</pre><hr /><p><strong>_POST</strong></p><pre>Array
(
)
</pre><hr /><p><strong>_GET (raw)</strong></p><pre></pre><hr /><p><strong>Check Features - FS</strong></p><pre>true</pre><hr /><p><strong>Check Features - CRYPTO</strong></p><pre>true</pre><hr /><p><strong>Check Features - DB</strong></p><pre>false</pre><hr /><p><strong>Check Features - ZIP</strong></p><pre>2</pre><hr /><p><strong>Check Features - HTTP (always true at this point if check-ip did not fail)</strong></p><pre>1</pre><hr /><p><strong>Check Features - GZIP</strong></p><pre>1</pre><hr /><p><strong>Check Features - single site?</strong></p><pre>yes</pre><hr /><p><strong>Check Features - got schema?</strong></p><pre>false</pre><hr /><p><strong>$statuses - new</strong></p><pre>Array
(
    [fs] => 1
    [crypto] => 1
    [zip] => 2
    [gzip] => 1
    [http] => 1
    [db] => 
    [json] => 1
    [singlesite] => 1
    [errors] => Array
        (
            [db] => Array
                (
                    [code] => CHECK_FEATURE_ERR_DB
                    [message] => mysql_connect: 1, mysqli_connect: 1
                )

        )

    [schemas] => 
)
</pre><hr /><p><strong>Bullet run time, seconds.</strong></p><pre>0.43</pre><hr />