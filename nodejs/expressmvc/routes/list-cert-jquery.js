const express = require('express');
const router = express.Router();

/**
 * GET /list-cert-jquery
 */

router.get('/', (req, res, next) => {
    res.render('list-cert-jquery')
});

module.exports = router;