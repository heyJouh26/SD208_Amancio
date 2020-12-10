var mongoose = require('mongoose');
var Schema = mongoose.Schema;

userSchema = new Schema({

        firstName: String,
        lastName: String,
        unique_id: Number,
        email: String,
        username: String,
        password: String,
        passwordConf: String
    }),
    User = mongoose.model('User', userSchema);

module.exports = User;