You must take care of the following for register 
 <ol>
  <li> Make first_name mandatory field</li>
  <li> Make last_name mandatory field</li>
  <li> Password must be at least 8 characters</li>
 </ol>
 
 

request: <strong> POST </strong>

<strong>
   <a>/api/register</a>
</strong>

<strong> Request body </strong>

<pre>
<code>
{
  first_name: userInput,
  last_name: userInput,
  email: userInput,
  password: userInput,
}
</code>
</pre>

<strong> Does not need [ Autherization header ]  </strong>

### Response 

#### if the email already registered before 
<pre>
<code>
{
    "message": "email already exists"
}
</code>
</pre>

#### if the password less than 8 chars
<pre>
<code>
{
    "message": "password must be at least 8 characters long"
}
</code>
</pre>

#### if successful operation
<pre>
<code>
{
  message: 'successful registeration'
}
</code>
</pre>

### if unsuccessful operation
<pre>
<code>
{
  message: 'error, unsuccessful registeration'
}
</code>
</pre>

<hr/>

