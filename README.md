## BlogPost Application

Welcome to the project repository! This README provides an overview of the controllers and their functionalities within the application.

### PostController

- **Index: Renders the view for displaying all posts. Handles filtering by category and author.**
- **Show: Renders the view for displaying a single post.**

### RegisterController

- **Index: Renders the registration form.**
- **Store: Handles the registration process and creates a new user.**

### LoginController

- **Index: Renders the login form.**
- **Authenticate: Handles user authentication.**
- **Logout: Logs out the user.**
  
### DashboardPostController

- **Index: Displays all posts created by the authenticated user.**
- **Create: Renders the form for creating a new post.**
- **Store: Handles the creation of a new post.**
- **Show: Displays a specific post.**
- **Edit: Renders the form for editing a post.**
- **Update: Handles updating an existing post.**
- **Destroy: Deletes a post.**
- **checkSlug: Checks and returns a unique slug for a post title.**


### AdminCategoryController
- **Index: Displays all categories (accessible only by admin).**
- **Create: Renders the form for creating a new category.**
- **Store: Handles the creation of a new category.**
- **Edit: Renders the form for editing a category.**
- **Update: Handles updating an existing category.**
- **Destroy: Deletes a category.**


