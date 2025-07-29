# Exercise 1: Debug and Refactor Legacy PHP (30–40 mins)

## Scenario
You are tasked with fixing a security issue in the login script. Currently, the code is vulnerable to SQL injection and returns raw HTML responses.

---

## Task
1. Identify the security issues in `login.php`.
2. Fix the SQL query using PDO prepared statements.
3. Update the script to return a JSON response instead of plain text.

---

## Expected Output
- On successful login: `{"success": true, "message": "Welcome alice"}`
- On invalid login: `{"success": false, "message": "Invalid login!"}`

---

## Bonus
- Add basic error handling for database connection or query failures.
