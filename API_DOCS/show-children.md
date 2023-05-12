## show-children

request: <strong> GET </strong>

<strong> http://127.0.0.1:8000/api/show-children </strong>
</br>


<strong> No Request body </strong>

<strong> Must provide [ <code>Autherization header</code> (secret token) ] like that <code>Bearer 13|P6VvMvJmWQ05wgyic6zXux42deaqL5nzJtVnOCB3</code> </strong>

### Response 
#### if successful operation <code>status code = 200</code>

<pre>
<code>
[
    {
        "fullName": "Ali Hussien!",
        "id": 1
    },
    {
        "fullName": "mohamed khaled!",
        "id": 2
    }
]
</code>
</pre>
