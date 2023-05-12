
## Profile

request: <strong> GET </strong>

<strong>
  http://127.0.0.1:8000/api/child-profile/{id}
</strong>

<strong> No Request body </strong>


<strong> Must provide [ <code>Autherization header</code> (secret token) ] like that <code>Bearer 13|P6VvMvJmWQ05wgyic6zXux42deaqL5nzJtVnOCB3</code> </strong>


### Response 
#### if successful operation <code>status code = 200</code>
<pre>
<code>
[
    {
        "id": 3,
        "firstName": "ali",
        "lastName": "mahdi",
        "childImage": null,
        "birthDate": "13 Y - 3 M - 24 D",
        "gender": "male",
        "childEthnicity": "black",
        "childJaundice": 1,
        "numberOfTests": 0,
        "familyWithASD": 1,
        "userId": 3
    }
]
</code>
</pre>

