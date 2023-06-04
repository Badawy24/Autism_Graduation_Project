
## Profile

request: <strong> GET </strong>

<strong>
  http://127.0.0.1:8000/api/childTests/{id}
</strong>

#### But you must pass id of child like => http://127.0.0.1:8000/api/childTests/6

<strong> No Request body </strong>


<strong> Must provide [ <code>Autherization header</code> (secret token) ] like that <code>Bearer 13|P6VvMvJmWQ05wgyic6zXux42deaqL5nzJtVnOCB3</code> </strong>


### Response 
#### if successful operation <code>status code = 200</code>
<pre>
<code>
[
    {
        "childId": "6",
        "whoCompletesTheTest": "self",
        "created_at": "2023-06-04 20:46:50",
        "testResult": "Non-autistic"
    },
    {
        "childId": "6",
        "whoCompletesTheTest": "self",
        "created_at": "2023-06-04 20:47:58",
        "testResult": "Non-autistic"
    },
    {
        "childId": "6",
        "whoCompletesTheTest": "self",
        "created_at": "2023-06-04 20:52:32",
        "testResult": "Autistic"
    },
    {
        "childId": "6",
        "whoCompletesTheTest": "self",
        "created_at": "2023-06-04 20:54:11",
        "testResult": "Non-autistic"
    },
    {
        "childId": "6",
        "whoCompletesTheTest": "self",
        "created_at": "2023-06-04 20:54:30",
        "testResult": "Non-autistic"
    }
]
</code>
</pre>

