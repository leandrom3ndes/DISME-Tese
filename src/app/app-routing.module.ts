import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {DashboardComponent} from './dashboard/dashboard.component';
import {LanguageComponent} from './language/language.component';
import {ActorComponent} from './actor/actor.component';
import {LoginComponent} from './login/login.component';
import {LogoutComponent} from './logout/logout.component';
import {RegisterComponent} from './register/register.component';
import {ProcessTypeComponent} from './processtype/processtype.component';
import { DynamicFormComponent } from './dynamic-form/dynamic-form.component';
import { AuthGuard } from './_helpers/auth_guard';
import { BlocklyComponent } from './blockly/blockly.component';

import {DynamicFormFormioComponent} from './dynamic-form-formio/dynamic-form-formio.component';
import {DynamicFormRenderComponent} from './dynamic-form-render/dynamic-form-render.component';
import {DynamicFormRenderedComponent} from './dynamic-form-render/dynamic-form-rendered/dynamic-form-rendered.component';
import {FormTranslatorComponent} from './form-translator/form-translator.component';
import {TemplateEditorComponent} from './template-editor/template-editor.component';

const routes: Routes = [
  { path: 'dashboard', component: DashboardComponent, canActivate: [AuthGuard] },
  { path: 'languages', component: LanguageComponent, canActivate: [AuthGuard] },
  { path: 'actors', component: ActorComponent, canActivate: [AuthGuard] },
  { path: 'processtypes', component: ProcessTypeComponent, canActivate: [AuthGuard] },
  { path: 'login', component: LoginComponent },
  { path: 'logout', component: LogoutComponent },
  { path: 'register', component: RegisterComponent },
  { path: 'formsManagement', component: DynamicFormComponent, canActivate: [AuthGuard] },
  { path: 'formsRender', component: DynamicFormRenderComponent, canActivate: [AuthGuard] },
  { path: 'formRendered/:id', component: DynamicFormRenderedComponent},
  { path: 'formsManagement/formio', component: DynamicFormFormioComponent},
  { path: 'formsTranslator', component: FormTranslatorComponent, canActivate: [AuthGuard] },
  { path: 'blockly', component: BlocklyComponent, canActivate: [AuthGuard]},
  { path: 'templateManagement', component: TemplateEditorComponent, canActivate: [AuthGuard]},
  { path: '**', redirectTo: 'login', pathMatch: 'full' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
