<template>
  <div class="container-fluid">
    <form @submit.prevent="submitForm">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">add</i>
              </div>
              <h4 class="card-title">
                {{ $t('global.create') }}
                <strong>{{ $t('cruds.info.title_singular') }}</strong>
              </h4>
            </div>
            <div class="card-body">
              <back-button></back-button>
            </div>
            <div class="card-body">
              <bootstrap-alert />
              <div class="row">
                <div class="col-md-12">
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.name_of_tasks,
                      'is-focused': activeField == 'name_of_tasks'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.info.fields.name_of_tasks')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.name_of_tasks"
                      @input="updateNameOfTasks"
                      @focus="focusField('name_of_tasks')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.description_of_tasks,
                      'is-focused': activeField == 'description_of_tasks'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.info.fields.description_of_tasks')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.description_of_tasks"
                      @input="updateDescriptionOfTasks"
                      @focus="focusField('description_of_tasks')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div
                    class="form-group bmd-form-group"
                    :class="{
                      'has-items': entry.name_created_by,
                      'is-focused': activeField == 'name_created_by'
                    }"
                  >
                    <label class="bmd-label-floating">{{
                      $t('cruds.info.fields.name_created_by')
                    }}</label>
                    <input
                      class="form-control"
                      type="text"
                      :value="entry.name_created_by"
                      @input="updateNameCreatedBy"
                      @focus="focusField('name_created_by')"
                      @blur="clearFocus"
                    />
                  </div>
                  <div class="form-group">
                    <label>{{
                      $t('cruds.info.fields.files_related_to_task')
                    }}</label>
                    <attachment
                      :route="getRoute('infos')"
                      :collection-name="'info_files_related_to_task'"
                      :media="entry.files_related_to_task"
                      :max-file-size="2"
                      @file-uploaded="insertFilesRelatedToTaskFile"
                      @file-removed="removeFilesRelatedToTaskFile"
                      :max-files="1"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <vue-button-spinner
                class="btn-primary"
                :status="status"
                :isLoading="loading"
                :disabled="loading"
              >
                {{ $t('global.save') }}
              </vue-button-spinner>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'
import Attachment from '@components/Attachments/Attachment'

export default {
  components: {
    Attachment
  },
  data() {
    return {
      status: '',
      activeField: ''
    }
  },
  computed: {
    ...mapGetters('InfosSingle', ['entry', 'loading'])
  },
  beforeDestroy() {
    this.resetState()
  },
  methods: {
    ...mapActions('InfosSingle', [
      'storeData',
      'resetState',
      'setNameOfTasks',
      'setDescriptionOfTasks',
      'setNameCreatedBy',
      'insertFilesRelatedToTaskFile',
      'removeFilesRelatedToTaskFile'
    ]),
    updateNameOfTasks(e) {
      this.setNameOfTasks(e.target.value)
    },
    updateDescriptionOfTasks(e) {
      this.setDescriptionOfTasks(e.target.value)
    },
    updateNameCreatedBy(e) {
      this.setNameCreatedBy(e.target.value)
    },
    getRoute(name) {
      return `${axios.defaults.baseURL}${name}/media`
    },
    submitForm() {
      this.storeData()
        .then(() => {
          this.$router.push({ name: 'infos.index' })
          this.$eventHub.$emit('create-success')
        })
        .catch(error => {
          this.status = 'failed'
          _.delay(() => {
            this.status = ''
          }, 3000)
        })
    },
    focusField(name) {
      this.activeField = name
    },
    clearFocus() {
      this.activeField = ''
    }
  }
}
</script>
