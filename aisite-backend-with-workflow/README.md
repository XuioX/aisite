# API Backend for Aisite

## Endpoints

- `save.php?token=sad` – save data from frontend (POST)
- `log.php?token=sad` – write log line (POST plain text)
- `webhook.php?token=sad` – trigger `deploy.sh` via GitHub webhook

## Security

- Token-based access
- Recommended: add IP whitelist in `.htaccess`
