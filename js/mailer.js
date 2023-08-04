require('dotenv').config()
const nodemailer = require('nodemailer');

const transporter = nodemailer.createTransport({
	service: 'gmail',
	auth: {
		user: 'mishap7103@gmail.com',
		pass: 'mzeavxocgvqidjhe'
	}
})

const mailOptions = {
	from: 'mishap7103@gmail.com',
	to: 'mishap7103@gmail.com',
	subject: 'Лист надіслений через node.js',
	text: 'Текст цього листа'
}

transporter.sendMail(mailOptions)