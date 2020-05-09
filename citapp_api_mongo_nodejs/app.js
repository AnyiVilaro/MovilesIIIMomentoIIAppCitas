import express from 'express';
import appointmentRouter from './routes/AppointmentRoutes';
import usersRouter from './routes/UserRoutes';

let app = express();

app.use(express.urlencoded({extended:false}));
app.use(express.json());
app.use('/api',usersRouter);
app.use('/api',appointmentRouter);

module.exports = app;
