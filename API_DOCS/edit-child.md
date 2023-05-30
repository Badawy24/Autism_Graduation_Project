
## Profile

request: <strong> PUT </strong>

#### you must provide the given id of child at the end of URL
<strong>
  http://127.0.0.1:8000/api/editChild/{id}
</strong>
like http://127.0.0.1:8000/api/editChild/6

<strong> Request body </strong>

<pre>
<code>
{
  fname: userInput,
  lname: userInput,
  date: userInput,          // must be date/month/day like 2022/01/01
  gender: userInput,        // male of female
  ethnicity: userInput, // Middle Eastern, White European, Hispanic, Black, Asian, South Asian, Native Indian, Others
  Jaundice: userInput, // yes or no
}
</code>
</pre>

<strong> Need [ Autherization header ]  </strong>


### Response 
#### if successful operation <code>status code = 200</code>
<pre>
<code>
[
   'message' => 'Data Changed Successfully'
]
</code>
</pre>

### if unsuccessful operation
<pre>
<code>
{
  'message' => 'Edit failed'
}
</code>
</pre>

