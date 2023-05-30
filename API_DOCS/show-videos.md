## show-courses

request: <strong> GET </strong>

#### you must provide the given id of course at the end of URL
<strong>
   http://127.0.0.1:8000/api/video/{id}
</strong>
like http://127.0.0.1:8000/api/video/6


<strong> No Request body </strong>


<strong> Must provide [ <code>Autherization header</code> (secret token) ] like that <code>Bearer 13|P6VvMvJmWQ05wgyic6zXux42deaqL5nzJtVnOCB3</code> </strong>

### Response 
#### if successful operation
<pre>
<code>
[
    {
        "id": 1,
        "videoTitleEn": "Autism Treatment",
        "videoTitleAr": "علاج التوحد",
        "videoApi": "https://www.youtube.com/watch?v=ABHzorw_mJU"
    }
]
</code>
</pre>
