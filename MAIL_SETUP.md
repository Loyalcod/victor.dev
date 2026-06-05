# Mail Setup

The contact form sends to `victorakujuobichibuike@gmail.com`, but Laravel needs a real mail transport.

Set these values in `.env` with valid SMTP credentials:

```env
MAIL_MAILER=smtp
MAIL_SCHEME=null
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=victorakujuobichibuike@gmail.com
MAIL_PASSWORD="your-gmail-app-password"
MAIL_FROM_ADDRESS=victorakujuobichibuike@gmail.com
MAIL_FROM_NAME="Akujuobi Victor Chibuike"
```

For Gmail, use an App Password, not your normal Gmail password. After changing `.env`, clear Laravel config cache if the app is cached:

```bash
php artisan config:clear
```
