request: <strong> POST </strong>

#### you must provide the given id of child at the end of URL
<strong>
  http://127.0.0.1:8000/api/diagnoseQuestions/{id}
</strong>
like http://127.0.0.1:8000/api/diagnoseQuestions/6

<strong> Request body </strong>

### answers to q1 to q10 are among these values only [always,usually,sometimes,rarely,never]
### q11 are among [Family Member,Self,Others,Health Care Professional]
### q12 only pass (0) for no and pass (1) for yes
<pre>
<code>
{
  q1: userInput,
  q2: userInput,
  q3: userInput,
  q4: userInput,
  q5: userInput,
  q6: userInput,
  q7: userInput,
  q8: userInput,
  q9: userInput,
  q10: userInput,
  q11: userInput,
  q12: userInput,
}
</code>
</pre>

<strong> Must provide [ <code>Autherization header</code> (secret token) ] like that <code>Bearer 13|P6VvMvJmWQ05wgyic6zXux42deaqL5nzJtVnOCB3</code> </strong>

### Response 
<pre>
<code>
{
    "diag_res": "autistic",
    "modle_type": "Aadolecent",
    "res": 1
}
</code>
</pre>

## Or
{
    "diag_res": "non-autistic",
    "modle_type": "Aadolecent",
    "res": 0
}
