# Exercise 2: Add Delete User Feature (Frontend + Backend)

## 🧑‍💻 Scenario
The application currently lists all users on a page but has no way to delete them.
Your task is to add a "Delete" button next to each user and allow admins to remove users from the database via AJAX.

---

## Task

### Backend
1. Create a new file `deleteUser.php`.
2. Accept a `POST` parameter `id` representing the user’s ID.
3. Delete the corresponding user from the database.
4. Return a JSON response:
   - Success: `{"success": true, "message": "User deleted"}`
   - Failure: `{"success": false, "message": "Error message"}`

---

### Frontend
1. In `index.html`, next to each username, add a **Delete** button dynamically (using jQuery).
2. When the button is clicked:
   - Send a `POST` request to `deleteUser.php` with the user’s ID.
   - On success, remove the row from the table without refreshing the page.
3. Handle errors (e.g., display an alert if deletion fails).

---

## Notes
- Use **manual JSON concatenation** to match the existing code style.
- Use **PDO prepared statements** for safety.
- Avoid modern frameworks—stick to jQuery and raw PHP.

---

## Expected Behavior
- Page loads with a user table.
- Each row has a working Delete button.
- Clicking Delete removes the user from both:
  - Database table `users`
  - The displayed HTML table row.

---

## Bonus
- Show a confirmation dialog before deleting.
- Disable the button while the request is in progress.

---
