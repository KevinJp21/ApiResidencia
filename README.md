# ResidenciasAPI

ResidenciasAPI is an API designed to manage residential data, including apartments, payments, owners, rates, and towers. This project provides endpoints for performing CRUD operations on residential data, facilitating efficient management and integration with other systems.

## Endpoints

### Get Owner
Fetches information about an owner.

- **URL:** `/getpropietario.php`
- **Method:** `GET`

### Save Owner
Saves a new owner to the database.

- **URL:** `/savepropietario.php`
- **Method:** `POST`
- **Payload:**
  ```json
  {
    "id": "2",
    "nombres": "Elizabeth",
    "apellidos": "Cruz",
    "direccion": "2018 Nonummy St.",
    "telefono": "+573283523969",
    "correo": "elizabeth.vel@icloud.net",
    "created": "2023-08-02 19:32:48",
    "modified": "2024-02-19 13:30:21"
  }
  ```
  ### Update Owner
Updates information about an existing owner.

- **URL:** `/updatepropietario.php`
- **Method:** `PUT`
- **Payload:**
  ```json
  {
    "id": "2",
    "nombres": "Camila",
    "apellidos": "Cruz",
    "direccion": "2018 Nonummy St.",
    "telefono": "+573283523969",
    "correo": "camila.vel@icloud.net",
    "created": "2023-08-02 19:32:48",
    "modified": "2024-02-19 13:30:21"
  }
  ```
    ### Delete Owner
Deletes an owner from the database.

- **URL:** `/deletepropietario.php`
- **Method:** `DELETE`
- **Payload:**
  ```json
  {
    "id": "2",
  }
  ```
  ### Data Managed
  - Owners
  ### Could have
  Data Managed
  - Apartments
  - Payments
  - Rates
  - Towers
  # Intalation
  To set up this project, clone the repository and configure the database connection.
  
  # Clone the repository
    ```Bash
    git clone https://github.com/yourusername/ResidenciasAPI.git
    ```
  # Go into the directory
  cd ApiResidencias

  ### Update database connection settings in `conexion.php`

  # Database Configuration
  Ensure your database is set up with the necessary tables for apartments, payments, owners, rates, and towers. Update the conexion.php file with your database connection details.

  # Contributions
  Feel free to fork this repository and contribute by submitting pull requests. For any issues, please create a new issue in the repository.

  ## Author
  - [KevinJp21](https://github.com/KevinJp21)
  
