## delete-child

request: <strong> DELETE </strong>

#### you must provide the given id of child at the end of URL

<strong>
  http://127.0.0.1:8000/api/deleteChild/{id}
</strong>

like http://127.0.0.1:8000/api/editChild/6

<strong> No Request body </strong>


<strong> Must provide [ <code>Autherization header</code> (secret token) ] like that <code>Bearer 13|P6VvMvJmWQ05wgyic6zXux42deaqL5nzJtVnOCB3</code> </strong>


### Response 
#### if successful operation
<pre>
<code>
{
    "msg": "deleted successfully"
}
</code>
</pre>
#### if unsuccessful operation
<pre>
<code>
{
    "msg": "Something Wrong"
}
</code>
</pre>
