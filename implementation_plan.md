# File.io Integration for PDF Resumes

Currently, FormSubmit strips PDF attachments due to free tier limitations, and the custom PHP script depends on server-side `mail()` configuration which may not be reliable.

To ensure you always receive the resumes without needing a backend server, we will implement your excellent suggestion to use the **file.io** API.

## Proposed Changes

### 1. `js/careers.js`
- **Intercept the Form Submission**: Instead of submitting the form natively to FormSubmit right away, we will intercept the click.
- **Upload to file.io**: We will take the user's selected PDF file and upload it to `https://file.io/` via an asynchronous JavaScript (`fetch`) request.
- **Extract Download Link**: The file.io API will return a direct download link (e.g., `https://file.io/abcd123`).
- **Submit to FormSubmit**: We will inject this link into a hidden input field called `Resume_Link` and then securely send the entire form data (including the new link) to FormSubmit.

### 2. `careers.php`
- Change the form `action` back to `https://formsubmit.co/thehypecrews@proton.me`.
- Remove the `enctype="multipart/form-data"` (since we are uploading the file via JS and sending only text to FormSubmit).
- Add a hidden input field `<input type="hidden" name="Resume_Link" id="resume_link_input">`.

## User Review Required
> [!IMPORTANT]
> **File.io Links are One-Time Use:** 
> By default, `file.io` links automatically expire and delete the file as soon as they are downloaded **once**. This means when you click the link in your email to download the applicant's CV, you must save it to your computer immediately. If you try to click the link a second time, the file will be gone. This is great for privacy, but requires you to be aware of it! Is this acceptable?

## Verification Plan
1. Fill out the careers form with a test PDF.
2. Verify the loading state says "Uploading Resume...".
3. Verify FormSubmit delivers the email to `thehypecrews@proton.me`.
4. Verify the email contains a clickable `Resume_Link` that correctly downloads the PDF from file.io.
