import axios from 'axios'

/**
 * This class makes api request and gets data or sends data
 */
export default class {
    /**
     * @param {FormData} formData
     * @return {void}
     */
    constructor(formData) {
        this.formData = formData
        this.formData.append('_ajax_nonce', sho_admin_globals.nonce)

        return axios.post(sho_admin_globals.ajax_url, this.formData)
    }
}
