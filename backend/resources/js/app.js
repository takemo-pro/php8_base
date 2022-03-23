import SwaggerUI from 'swagger-ui';
const spec = require('./openapi.yaml');
SwaggerUI({
    spec,
    dom_id: '#swagger_ui'
})
