# Exercise 3: Extend Cron Job for User Reports

## Scenario
A nightly cron job `dailyReport.php` currently exports all active users (username, email) into a CSV file.
The system needs more insights and better reporting.

---

## Task
1. Modify `dailyReport.php` to include the **last login timestamp** of each active user in the CSV output.
2. Add a feature:
   - Any user who hasn’t logged in for **6 months or more** should be written to a new file:
     - Path: `/tmp/inactive_users.txt`
     - Each username on a new line
3. Ensure that the script:
   - Handles database connection or query errors gracefully.
   - Logs errors instead of silently failing.

---

## Notes
- Keep the code **procedural**, consistent with the legacy project.
- No modern frameworks or libraries.
- Use **PDO prepared statements** where needed.

---

## Expected Output
- `/tmp/active_users.csv` contains:
  - `username,email,last_login` for each active user.
- `/tmp/inactive_users.txt` contains:
  - List of inactive usernames (one per line).

---

## Bonus
- Add a simple log message to indicate how many inactive users were found.
- Append to `inactive_users.txt` instead of overwriting it each run.
