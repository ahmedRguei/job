<?php
class FluidCache_Candidateresume_Candidate_partial_Candidate_DisplayCandidate_b046e559aeae3b6cd873701420c85da4db902f90 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * section DisplayCandidate
 */
public function section_b250c2eb5bf4b296d042b8aa110c71fdb4ed2373(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
        <!-- dispaly one candidate -->
        <li style="display: list-item;">
            <div class="box">
                <div class="col-md-7 no-padding-right-left">
                    <div class="col-md-1 col-sm-2 col-xs-12 no-padding-right-left text-center">
                        <img src="typo3conf/ext/candidateresume/Resources/Public/Images/person.png" style="width: 45px;" alt="img" />
                    </div>
                    <div class="col-md-11 col-sm-10 col-xs-12 center-mobile">
                        <h4 class="col-md-6 col-sm-6">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments1 = array();
$arguments1['action'] = 'show';
// Rendering Array
$array2 = array();
$array2['candidate'] = $currentVariableContainer->getOrNull('candidate');
$arguments1['arguments'] = $array2;
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['controller'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['pluginName'] = NULL;
$arguments1['pageUid'] = NULL;
$arguments1['pageType'] = 0;
$arguments1['noCache'] = false;
$arguments1['noCacheHash'] = false;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['linkAccessRestrictedPages'] = false;
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['addQueryStringMethod'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['name'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['rev'] = NULL;
$arguments1['target'] = NULL;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output4 = '';

$output4 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$arguments5 = array();
$arguments5['mode'] = 'capital';
$arguments5['value'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'firstName', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());
return (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$arguments10 = array();
$arguments10['mode'] = 'capital';
$arguments10['value'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'lastName', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());
return (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));
};

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output4 .= '
                            ';
return $output4;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper15->setArguments($arguments1);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '
                        </h4>
                        <h4 class="col-md-6 col-sm-6 ">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$arguments16 = array();
$arguments16['mode'] = 'capital';
$arguments16['value'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'professionalTitle', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());
return (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
                        </h4>
                        <p>
                            <i class="fa fa-envelope-o color-pink"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'email', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output0 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output0 .= '
                            <i class="fa fa-phone color-pink"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments24 = array();
$arguments24['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'phone', $renderingContext);
$arguments24['keepQuotes'] = false;
$arguments24['encoding'] = NULL;
$arguments24['doubleEncode'] = true;
$renderChildrenClosure25 = function() {return NULL;};
$value26 = ($arguments24['value'] !== NULL ? $arguments24['value'] : $renderChildrenClosure25());

$output0 .= (!is_string($value26) ? $value26 : htmlspecialchars($value26, ($arguments24['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments24['encoding'] !== NULL ? $arguments24['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments24['doubleEncode']));

$output0 .= '
                        </p>
                        <i class="fa fa-map-marker color-pink"></i>
                        <i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'address', $renderingContext);
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output0 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));

$output0 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'city', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output0 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output0 .= '</i>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12 btns-candidate no-padding-right-left text-center">
                    <!-- Button edit : update candidate -->
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments33 = array();
$arguments33['action'] = 'edit';
$arguments33['controller'] = 'Candidate';
// Rendering Array
$array34 = array();
$array34['candidate'] = $currentVariableContainer->getOrNull('candidate');
$arguments33['arguments'] = $array34;
$arguments33['title'] = 'Edit this candidate';
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['pluginName'] = NULL;
$arguments33['pageUid'] = NULL;
$arguments33['pageType'] = 0;
$arguments33['noCache'] = false;
$arguments33['noCacheHash'] = false;
$arguments33['section'] = '';
$arguments33['format'] = '';
$arguments33['linkAccessRestrictedPages'] = false;
$arguments33['additionalParams'] = array (
);
$arguments33['absolute'] = false;
$arguments33['addQueryString'] = false;
$arguments33['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments33['addQueryStringMethod'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['name'] = NULL;
$arguments33['rel'] = NULL;
$arguments33['rev'] = NULL;
$arguments33['target'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                        <i class="fa fa-edit" style="position: absolute;right: 20px;top: 1px;"></i>
                    ';
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper36->setArguments($arguments33);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper36->initializeArgumentsAndRender();

$output0 .= '<!-- /Button edit : update candidate -->
                    <!-- Button delete : remove candidate -->
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments37 = array();
$arguments37['action'] = 'delete';
$arguments37['controller'] = 'Candidate';
// Rendering Array
$array38 = array();
$array38['candidate'] = $currentVariableContainer->getOrNull('candidate');
$arguments37['arguments'] = $array38;
$arguments37['title'] = 'Delete this candidate';
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['pluginName'] = NULL;
$arguments37['pageUid'] = NULL;
$arguments37['pageType'] = 0;
$arguments37['noCache'] = false;
$arguments37['noCacheHash'] = false;
$arguments37['section'] = '';
$arguments37['format'] = '';
$arguments37['linkAccessRestrictedPages'] = false;
$arguments37['additionalParams'] = array (
);
$arguments37['absolute'] = false;
$arguments37['addQueryString'] = false;
$arguments37['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments37['addQueryStringMethod'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['name'] = NULL;
$arguments37['rel'] = NULL;
$arguments37['rev'] = NULL;
$arguments37['target'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                        <i class="fa fa-close" style="position: absolute;right: 0;top: 0;"></i>
                    ';
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper40->setArguments($arguments37);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper40->initializeArgumentsAndRender();

$output0 .= '<!-- /Button delete : remove candidate -->
                    <!-- Button edit education : update candidate\'s education -->
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments41 = array();
$arguments41['action'] = 'new';
$arguments41['controller'] = 'Education';
// Rendering Array
$array42 = array();
$array42['candidate'] = $currentVariableContainer->getOrNull('candidate');
$arguments41['arguments'] = $array42;
$arguments41['class'] = 'btn btn-primary btn-sm btn-option-candidate';
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['extensionName'] = NULL;
$arguments41['pluginName'] = NULL;
$arguments41['pageUid'] = NULL;
$arguments41['pageType'] = 0;
$arguments41['noCache'] = false;
$arguments41['noCacheHash'] = false;
$arguments41['section'] = '';
$arguments41['format'] = '';
$arguments41['linkAccessRestrictedPages'] = false;
$arguments41['additionalParams'] = array (
);
$arguments41['absolute'] = false;
$arguments41['addQueryString'] = false;
$arguments41['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments41['addQueryStringMethod'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['name'] = NULL;
$arguments41['rel'] = NULL;
$arguments41['rev'] = NULL;
$arguments41['target'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
                        <i class="fa fa-book"></i> Education ( ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments45 = array();
$arguments45['subject'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'educations', $renderingContext);
$renderChildrenClosure46 = function() {return NULL;};

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= ' )
                    ';
return $output44;
};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper47->setArguments($arguments41);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper47->initializeArgumentsAndRender();

$output0 .= '<!-- /Button edit education : update candidate\'s education -->
                    <!-- Button edit experience : update candidate\'s experience -->
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments48 = array();
$arguments48['action'] = 'new';
$arguments48['controller'] = 'Experience';
// Rendering Array
$array49 = array();
$array49['candidate'] = $currentVariableContainer->getOrNull('candidate');
$arguments48['arguments'] = $array49;
$arguments48['class'] = 'btn btn-default btn-sm btn-option-candidate';
$arguments48['additionalAttributes'] = NULL;
$arguments48['data'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['pluginName'] = NULL;
$arguments48['pageUid'] = NULL;
$arguments48['pageType'] = 0;
$arguments48['noCache'] = false;
$arguments48['noCacheHash'] = false;
$arguments48['section'] = '';
$arguments48['format'] = '';
$arguments48['linkAccessRestrictedPages'] = false;
$arguments48['additionalParams'] = array (
);
$arguments48['absolute'] = false;
$arguments48['addQueryString'] = false;
$arguments48['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments48['addQueryStringMethod'] = NULL;
$arguments48['dir'] = NULL;
$arguments48['id'] = NULL;
$arguments48['lang'] = NULL;
$arguments48['style'] = NULL;
$arguments48['title'] = NULL;
$arguments48['accesskey'] = NULL;
$arguments48['tabindex'] = NULL;
$arguments48['onclick'] = NULL;
$arguments48['name'] = NULL;
$arguments48['rel'] = NULL;
$arguments48['rev'] = NULL;
$arguments48['target'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
                        <i class="fa fa-plus "></i> Experiences ( ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments52 = array();
$arguments52['subject'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'experiences', $renderingContext);
$renderChildrenClosure53 = function() {return NULL;};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= ' )
                    ';
return $output51;
};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper54->setArguments($arguments48);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper54->initializeArgumentsAndRender();

$output0 .= '<!-- /Button edit experience : update candidate\'s experience -->
                    <!-- Display acquired skills : accordian style -->
                    <a class="btn btn-default btn-sm btn-option-candidate" data-toggle="collapse" data-target="#skills';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments55 = array();
$arguments55['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'uid', $renderingContext);
$arguments55['keepQuotes'] = false;
$arguments55['encoding'] = NULL;
$arguments55['doubleEncode'] = true;
$renderChildrenClosure56 = function() {return NULL;};
$value57 = ($arguments55['value'] !== NULL ? $arguments55['value'] : $renderChildrenClosure56());

$output0 .= (!is_string($value57) ? $value57 : htmlspecialchars($value57, ($arguments55['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments55['encoding'] !== NULL ? $arguments55['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments55['doubleEncode']));

$output0 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments58 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments59 = array();
$arguments59['glue'] = ',';
$arguments59['as'] = NULL;
$arguments59['content'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'acquiredSkills', $renderingContext);
};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments58['each'] = $viewHelper61->initializeArgumentsAndRender();
$arguments58['as'] = 'lang';
$arguments58['iteration'] = 'i';
$arguments58['key'] = '';
$arguments58['reverse'] = false;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments64 = array();
// Rendering Boolean node
$arguments64['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'isLast', $renderingContext));
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '<i class="fa fa-language "></i> Skills ( ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'total', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() {return NULL;};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output66 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output66 .= ' )';
return $output66;
};

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
                        ';
return $output63;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments58, $renderChildrenClosure62, $renderingContext);

$output0 .= '
                    </a>
                    <div id="skills';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments70 = array();
$arguments70['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'uid', $renderingContext);
$arguments70['keepQuotes'] = false;
$arguments70['encoding'] = NULL;
$arguments70['doubleEncode'] = true;
$renderChildrenClosure71 = function() {return NULL;};
$value72 = ($arguments70['value'] !== NULL ? $arguments70['value'] : $renderChildrenClosure71());

$output0 .= (!is_string($value72) ? $value72 : htmlspecialchars($value72, ($arguments70['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments70['encoding'] !== NULL ? $arguments70['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments70['doubleEncode']));

$output0 .= '" class="collapse col-sm-12">
                        <i class="fa fa-globe "></i> <i class="color-pink">Acquired Skills</i> <br /> <br />
                        <i style="font-size: 15px;">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments73 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments74 = array();
$arguments74['glue'] = ',';
$arguments74['as'] = NULL;
$arguments74['content'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'acquiredSkills', $renderingContext);
};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper');
$viewHelper76->setArguments($arguments74);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure75);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments73['each'] = $viewHelper76->initializeArgumentsAndRender();
$arguments73['as'] = 'skill';
$arguments73['iteration'] = 'i';
$arguments73['key'] = '';
$arguments73['reverse'] = false;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments79 = array();
// Rendering Boolean node
$arguments79['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'isLast', $renderingContext));
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments82 = array();
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments84 = array();
$arguments84['value'] = $currentVariableContainer->getOrNull('skill');
$arguments84['keepQuotes'] = false;
$arguments84['encoding'] = NULL;
$arguments84['doubleEncode'] = true;
$renderChildrenClosure85 = function() {return NULL;};
$value86 = ($arguments84['value'] !== NULL ? $arguments84['value'] : $renderChildrenClosure85());
return (!is_string($value86) ? $value86 : htmlspecialchars($value86, ($arguments84['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments84['encoding'] !== NULL ? $arguments84['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments84['doubleEncode']));
};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments87 = array();
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments90 = array();
$arguments90['value'] = $currentVariableContainer->getOrNull('skill');
$arguments90['keepQuotes'] = false;
$arguments90['encoding'] = NULL;
$arguments90['doubleEncode'] = true;
$renderChildrenClosure91 = function() {return NULL;};
$value92 = ($arguments90['value'] !== NULL ? $arguments90['value'] : $renderChildrenClosure91());

$output89 .= (!is_string($value92) ? $value92 : htmlspecialchars($value92, ($arguments90['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments90['encoding'] !== NULL ? $arguments90['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments90['doubleEncode']));

$output89 .= ', ';
return $output89;
};

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output81 .= '
                                ';
return $output81;
};
$arguments79['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = $currentVariableContainer->getOrNull('skill');
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());
return (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));
};
$arguments79['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output96 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = $currentVariableContainer->getOrNull('skill');
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() {return NULL;};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());

$output96 .= (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));

$output96 .= ', ';
return $output96;
};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
                            ';
return $output78;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments73, $renderChildrenClosure77, $renderingContext);

$output0 .= '
                        </i>
                    </div><!-- Display acquired skills : accordian style -->
                    <!-- Display spoken languges : accordian style -->
                    <a class="btn btn-primary btn-sm btn-option-candidate" data-toggle="collapse" data-target="#spoken';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments100 = array();
$arguments100['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'uid', $renderingContext);
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = function() {return NULL;};
$value102 = ($arguments100['value'] !== NULL ? $arguments100['value'] : $renderChildrenClosure101());

$output0 .= (!is_string($value102) ? $value102 : htmlspecialchars($value102, ($arguments100['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments100['encoding'] !== NULL ? $arguments100['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments100['doubleEncode']));

$output0 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments103 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments104 = array();
$arguments104['glue'] = ',';
$arguments104['as'] = NULL;
$arguments104['content'] = NULL;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'spokenLanguage', $renderingContext);
};
$viewHelper106 = $self->getViewHelper('$viewHelper106', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper');
$viewHelper106->setArguments($arguments104);
$viewHelper106->setRenderingContext($renderingContext);
$viewHelper106->setRenderChildrenClosure($renderChildrenClosure105);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments103['each'] = $viewHelper106->initializeArgumentsAndRender();
$arguments103['as'] = 'lang';
$arguments103['iteration'] = 'i';
$arguments103['key'] = '';
$arguments103['reverse'] = false;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments109 = array();
// Rendering Boolean node
$arguments109['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'isLast', $renderingContext));
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '<i class="fa fa-language "></i> Languages ( ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments112 = array();
$arguments112['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'total', $renderingContext);
$arguments112['keepQuotes'] = false;
$arguments112['encoding'] = NULL;
$arguments112['doubleEncode'] = true;
$renderChildrenClosure113 = function() {return NULL;};
$value114 = ($arguments112['value'] !== NULL ? $arguments112['value'] : $renderChildrenClosure113());

$output111 .= (!is_string($value114) ? $value114 : htmlspecialchars($value114, ($arguments112['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments112['encoding'] !== NULL ? $arguments112['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments112['doubleEncode']));

$output111 .= ' )';
return $output111;
};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
                        ';
return $output108;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments103, $renderChildrenClosure107, $renderingContext);

$output0 .= '
                    </a>
                    <div id="spoken';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments115 = array();
$arguments115['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'uid', $renderingContext);
$arguments115['keepQuotes'] = false;
$arguments115['encoding'] = NULL;
$arguments115['doubleEncode'] = true;
$renderChildrenClosure116 = function() {return NULL;};
$value117 = ($arguments115['value'] !== NULL ? $arguments115['value'] : $renderChildrenClosure116());

$output0 .= (!is_string($value117) ? $value117 : htmlspecialchars($value117, ($arguments115['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments115['encoding'] !== NULL ? $arguments115['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments115['doubleEncode']));

$output0 .= '" class="collapse col-sm-12">
                        <i class="fa fa-globe "></i> <i class="color-pink">Spoken languages</i> <br /> <br />
                        <i style="font-size: 15px;">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments118 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments119 = array();
$arguments119['glue'] = ',';
$arguments119['as'] = NULL;
$arguments119['content'] = NULL;
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'spokenLanguage', $renderingContext);
};
$viewHelper121 = $self->getViewHelper('$viewHelper121', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper');
$viewHelper121->setArguments($arguments119);
$viewHelper121->setRenderingContext($renderingContext);
$viewHelper121->setRenderChildrenClosure($renderChildrenClosure120);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments118['each'] = $viewHelper121->initializeArgumentsAndRender();
$arguments118['as'] = 'lang';
$arguments118['iteration'] = 'i';
$arguments118['key'] = '';
$arguments118['reverse'] = false;
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output123 = '';

$output123 .= '

                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments124 = array();
// Rendering Boolean node
$arguments124['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'isLast', $renderingContext));
$arguments124['then'] = NULL;
$arguments124['else'] = NULL;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments127 = array();
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments129 = array();
$arguments129['value'] = $currentVariableContainer->getOrNull('lang');
$arguments129['keepQuotes'] = false;
$arguments129['encoding'] = NULL;
$arguments129['doubleEncode'] = true;
$renderChildrenClosure130 = function() {return NULL;};
$value131 = ($arguments129['value'] !== NULL ? $arguments129['value'] : $renderChildrenClosure130());
return (!is_string($value131) ? $value131 : htmlspecialchars($value131, ($arguments129['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments129['encoding'] !== NULL ? $arguments129['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments129['doubleEncode']));
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments132 = array();
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = $currentVariableContainer->getOrNull('lang');
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = NULL;
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() {return NULL;};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output134 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments135['encoding'] !== NULL ? $arguments135['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments135['doubleEncode']));

$output134 .= ', ';
return $output134;
};

$output126 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output126 .= '
                                ';
return $output126;
};
$arguments124['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments138 = array();
$arguments138['value'] = $currentVariableContainer->getOrNull('lang');
$arguments138['keepQuotes'] = false;
$arguments138['encoding'] = NULL;
$arguments138['doubleEncode'] = true;
$renderChildrenClosure139 = function() {return NULL;};
$value140 = ($arguments138['value'] !== NULL ? $arguments138['value'] : $renderChildrenClosure139());
return (!is_string($value140) ? $value140 : htmlspecialchars($value140, ($arguments138['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments138['encoding'] !== NULL ? $arguments138['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments138['doubleEncode']));
};
$arguments124['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output141 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments142 = array();
$arguments142['value'] = $currentVariableContainer->getOrNull('lang');
$arguments142['keepQuotes'] = false;
$arguments142['encoding'] = NULL;
$arguments142['doubleEncode'] = true;
$renderChildrenClosure143 = function() {return NULL;};
$value144 = ($arguments142['value'] !== NULL ? $arguments142['value'] : $renderChildrenClosure143());

$output141 .= (!is_string($value144) ? $value144 : htmlspecialchars($value144, ($arguments142['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments142['encoding'] !== NULL ? $arguments142['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments142['doubleEncode']));

$output141 .= ', ';
return $output141;
};

$output123 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
                            ';
return $output123;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments118, $renderChildrenClosure122, $renderingContext);

$output0 .= '
                        </i>
                    </div><!-- Display spoken languges : accordian style -->
                </div>
            </div>
        </li><!-- /dispaly one candidate -->
    ';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output145 = '';

$output145 .= '

<div xmlns="http://www.w3.org/1999/xhtml" lang="en"
     xmlns:v="http://fedext.net/ns/vhs/ViewHelpers" >
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments146 = array();
$arguments146['name'] = 'DisplayCandidate';
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output148 = '';

$output148 .= '
        <!-- dispaly one candidate -->
        <li style="display: list-item;">
            <div class="box">
                <div class="col-md-7 no-padding-right-left">
                    <div class="col-md-1 col-sm-2 col-xs-12 no-padding-right-left text-center">
                        <img src="typo3conf/ext/candidateresume/Resources/Public/Images/person.png" style="width: 45px;" alt="img" />
                    </div>
                    <div class="col-md-11 col-sm-10 col-xs-12 center-mobile">
                        <h4 class="col-md-6 col-sm-6">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments149 = array();
$arguments149['action'] = 'show';
// Rendering Array
$array150 = array();
$array150['candidate'] = $currentVariableContainer->getOrNull('candidate');
$arguments149['arguments'] = $array150;
$arguments149['additionalAttributes'] = NULL;
$arguments149['data'] = NULL;
$arguments149['controller'] = NULL;
$arguments149['extensionName'] = NULL;
$arguments149['pluginName'] = NULL;
$arguments149['pageUid'] = NULL;
$arguments149['pageType'] = 0;
$arguments149['noCache'] = false;
$arguments149['noCacheHash'] = false;
$arguments149['section'] = '';
$arguments149['format'] = '';
$arguments149['linkAccessRestrictedPages'] = false;
$arguments149['additionalParams'] = array (
);
$arguments149['absolute'] = false;
$arguments149['addQueryString'] = false;
$arguments149['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments149['addQueryStringMethod'] = NULL;
$arguments149['class'] = NULL;
$arguments149['dir'] = NULL;
$arguments149['id'] = NULL;
$arguments149['lang'] = NULL;
$arguments149['style'] = NULL;
$arguments149['title'] = NULL;
$arguments149['accesskey'] = NULL;
$arguments149['tabindex'] = NULL;
$arguments149['onclick'] = NULL;
$arguments149['name'] = NULL;
$arguments149['rel'] = NULL;
$arguments149['rev'] = NULL;
$arguments149['target'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output152 = '';

$output152 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$arguments153 = array();
$arguments153['mode'] = 'capital';
$arguments153['value'] = NULL;
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments155 = array();
$arguments155['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'firstName', $renderingContext);
$arguments155['keepQuotes'] = false;
$arguments155['encoding'] = NULL;
$arguments155['doubleEncode'] = true;
$renderChildrenClosure156 = function() {return NULL;};
$value157 = ($arguments155['value'] !== NULL ? $arguments155['value'] : $renderChildrenClosure156());
return (!is_string($value157) ? $value157 : htmlspecialchars($value157, ($arguments155['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments155['encoding'] !== NULL ? $arguments155['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments155['doubleEncode']));
};

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$arguments158 = array();
$arguments158['mode'] = 'capital';
$arguments158['value'] = NULL;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments160 = array();
$arguments160['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'lastName', $renderingContext);
$arguments160['keepQuotes'] = false;
$arguments160['encoding'] = NULL;
$arguments160['doubleEncode'] = true;
$renderChildrenClosure161 = function() {return NULL;};
$value162 = ($arguments160['value'] !== NULL ? $arguments160['value'] : $renderChildrenClosure161());
return (!is_string($value162) ? $value162 : htmlspecialchars($value162, ($arguments160['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments160['encoding'] !== NULL ? $arguments160['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments160['doubleEncode']));
};

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output152 .= '
                            ';
return $output152;
};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper163->setArguments($arguments149);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure151);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output148 .= $viewHelper163->initializeArgumentsAndRender();

$output148 .= '
                        </h4>
                        <h4 class="col-md-6 col-sm-6 ">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$arguments164 = array();
$arguments164['mode'] = 'capital';
$arguments164['value'] = NULL;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments166 = array();
$arguments166['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'professionalTitle', $renderingContext);
$arguments166['keepQuotes'] = false;
$arguments166['encoding'] = NULL;
$arguments166['doubleEncode'] = true;
$renderChildrenClosure167 = function() {return NULL;};
$value168 = ($arguments166['value'] !== NULL ? $arguments166['value'] : $renderChildrenClosure167());
return (!is_string($value168) ? $value168 : htmlspecialchars($value168, ($arguments166['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments166['encoding'] !== NULL ? $arguments166['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments166['doubleEncode']));
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output148 .= '
                        </h4>
                        <p>
                            <i class="fa fa-envelope-o color-pink"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments169 = array();
$arguments169['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'email', $renderingContext);
$arguments169['keepQuotes'] = false;
$arguments169['encoding'] = NULL;
$arguments169['doubleEncode'] = true;
$renderChildrenClosure170 = function() {return NULL;};
$value171 = ($arguments169['value'] !== NULL ? $arguments169['value'] : $renderChildrenClosure170());

$output148 .= (!is_string($value171) ? $value171 : htmlspecialchars($value171, ($arguments169['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments169['encoding'] !== NULL ? $arguments169['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments169['doubleEncode']));

$output148 .= '
                            <i class="fa fa-phone color-pink"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments172 = array();
$arguments172['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'phone', $renderingContext);
$arguments172['keepQuotes'] = false;
$arguments172['encoding'] = NULL;
$arguments172['doubleEncode'] = true;
$renderChildrenClosure173 = function() {return NULL;};
$value174 = ($arguments172['value'] !== NULL ? $arguments172['value'] : $renderChildrenClosure173());

$output148 .= (!is_string($value174) ? $value174 : htmlspecialchars($value174, ($arguments172['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments172['encoding'] !== NULL ? $arguments172['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments172['doubleEncode']));

$output148 .= '
                        </p>
                        <i class="fa fa-map-marker color-pink"></i>
                        <i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments175 = array();
$arguments175['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'address', $renderingContext);
$arguments175['keepQuotes'] = false;
$arguments175['encoding'] = NULL;
$arguments175['doubleEncode'] = true;
$renderChildrenClosure176 = function() {return NULL;};
$value177 = ($arguments175['value'] !== NULL ? $arguments175['value'] : $renderChildrenClosure176());

$output148 .= (!is_string($value177) ? $value177 : htmlspecialchars($value177, ($arguments175['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments175['encoding'] !== NULL ? $arguments175['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments175['doubleEncode']));

$output148 .= ', ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments178 = array();
$arguments178['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'city', $renderingContext);
$arguments178['keepQuotes'] = false;
$arguments178['encoding'] = NULL;
$arguments178['doubleEncode'] = true;
$renderChildrenClosure179 = function() {return NULL;};
$value180 = ($arguments178['value'] !== NULL ? $arguments178['value'] : $renderChildrenClosure179());

$output148 .= (!is_string($value180) ? $value180 : htmlspecialchars($value180, ($arguments178['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments178['encoding'] !== NULL ? $arguments178['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments178['doubleEncode']));

$output148 .= '</i>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12 btns-candidate no-padding-right-left text-center">
                    <!-- Button edit : update candidate -->
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments181 = array();
$arguments181['action'] = 'edit';
$arguments181['controller'] = 'Candidate';
// Rendering Array
$array182 = array();
$array182['candidate'] = $currentVariableContainer->getOrNull('candidate');
$arguments181['arguments'] = $array182;
$arguments181['title'] = 'Edit this candidate';
$arguments181['additionalAttributes'] = NULL;
$arguments181['data'] = NULL;
$arguments181['extensionName'] = NULL;
$arguments181['pluginName'] = NULL;
$arguments181['pageUid'] = NULL;
$arguments181['pageType'] = 0;
$arguments181['noCache'] = false;
$arguments181['noCacheHash'] = false;
$arguments181['section'] = '';
$arguments181['format'] = '';
$arguments181['linkAccessRestrictedPages'] = false;
$arguments181['additionalParams'] = array (
);
$arguments181['absolute'] = false;
$arguments181['addQueryString'] = false;
$arguments181['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments181['addQueryStringMethod'] = NULL;
$arguments181['class'] = NULL;
$arguments181['dir'] = NULL;
$arguments181['id'] = NULL;
$arguments181['lang'] = NULL;
$arguments181['style'] = NULL;
$arguments181['accesskey'] = NULL;
$arguments181['tabindex'] = NULL;
$arguments181['onclick'] = NULL;
$arguments181['name'] = NULL;
$arguments181['rel'] = NULL;
$arguments181['rev'] = NULL;
$arguments181['target'] = NULL;
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                        <i class="fa fa-edit" style="position: absolute;right: 20px;top: 1px;"></i>
                    ';
};
$viewHelper184 = $self->getViewHelper('$viewHelper184', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper184->setArguments($arguments181);
$viewHelper184->setRenderingContext($renderingContext);
$viewHelper184->setRenderChildrenClosure($renderChildrenClosure183);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output148 .= $viewHelper184->initializeArgumentsAndRender();

$output148 .= '<!-- /Button edit : update candidate -->
                    <!-- Button delete : remove candidate -->
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments185 = array();
$arguments185['action'] = 'delete';
$arguments185['controller'] = 'Candidate';
// Rendering Array
$array186 = array();
$array186['candidate'] = $currentVariableContainer->getOrNull('candidate');
$arguments185['arguments'] = $array186;
$arguments185['title'] = 'Delete this candidate';
$arguments185['additionalAttributes'] = NULL;
$arguments185['data'] = NULL;
$arguments185['extensionName'] = NULL;
$arguments185['pluginName'] = NULL;
$arguments185['pageUid'] = NULL;
$arguments185['pageType'] = 0;
$arguments185['noCache'] = false;
$arguments185['noCacheHash'] = false;
$arguments185['section'] = '';
$arguments185['format'] = '';
$arguments185['linkAccessRestrictedPages'] = false;
$arguments185['additionalParams'] = array (
);
$arguments185['absolute'] = false;
$arguments185['addQueryString'] = false;
$arguments185['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments185['addQueryStringMethod'] = NULL;
$arguments185['class'] = NULL;
$arguments185['dir'] = NULL;
$arguments185['id'] = NULL;
$arguments185['lang'] = NULL;
$arguments185['style'] = NULL;
$arguments185['accesskey'] = NULL;
$arguments185['tabindex'] = NULL;
$arguments185['onclick'] = NULL;
$arguments185['name'] = NULL;
$arguments185['rel'] = NULL;
$arguments185['rev'] = NULL;
$arguments185['target'] = NULL;
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
                        <i class="fa fa-close" style="position: absolute;right: 0;top: 0;"></i>
                    ';
};
$viewHelper188 = $self->getViewHelper('$viewHelper188', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper188->setArguments($arguments185);
$viewHelper188->setRenderingContext($renderingContext);
$viewHelper188->setRenderChildrenClosure($renderChildrenClosure187);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output148 .= $viewHelper188->initializeArgumentsAndRender();

$output148 .= '<!-- /Button delete : remove candidate -->
                    <!-- Button edit education : update candidate\'s education -->
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments189 = array();
$arguments189['action'] = 'new';
$arguments189['controller'] = 'Education';
// Rendering Array
$array190 = array();
$array190['candidate'] = $currentVariableContainer->getOrNull('candidate');
$arguments189['arguments'] = $array190;
$arguments189['class'] = 'btn btn-primary btn-sm btn-option-candidate';
$arguments189['additionalAttributes'] = NULL;
$arguments189['data'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['pluginName'] = NULL;
$arguments189['pageUid'] = NULL;
$arguments189['pageType'] = 0;
$arguments189['noCache'] = false;
$arguments189['noCacheHash'] = false;
$arguments189['section'] = '';
$arguments189['format'] = '';
$arguments189['linkAccessRestrictedPages'] = false;
$arguments189['additionalParams'] = array (
);
$arguments189['absolute'] = false;
$arguments189['addQueryString'] = false;
$arguments189['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments189['addQueryStringMethod'] = NULL;
$arguments189['dir'] = NULL;
$arguments189['id'] = NULL;
$arguments189['lang'] = NULL;
$arguments189['style'] = NULL;
$arguments189['title'] = NULL;
$arguments189['accesskey'] = NULL;
$arguments189['tabindex'] = NULL;
$arguments189['onclick'] = NULL;
$arguments189['name'] = NULL;
$arguments189['rel'] = NULL;
$arguments189['rev'] = NULL;
$arguments189['target'] = NULL;
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output192 = '';

$output192 .= '
                        <i class="fa fa-book"></i> Education ( ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments193 = array();
$arguments193['subject'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'educations', $renderingContext);
$renderChildrenClosure194 = function() {return NULL;};

$output192 .= TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output192 .= ' )
                    ';
return $output192;
};
$viewHelper195 = $self->getViewHelper('$viewHelper195', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper195->setArguments($arguments189);
$viewHelper195->setRenderingContext($renderingContext);
$viewHelper195->setRenderChildrenClosure($renderChildrenClosure191);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output148 .= $viewHelper195->initializeArgumentsAndRender();

$output148 .= '<!-- /Button edit education : update candidate\'s education -->
                    <!-- Button edit experience : update candidate\'s experience -->
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments196 = array();
$arguments196['action'] = 'new';
$arguments196['controller'] = 'Experience';
// Rendering Array
$array197 = array();
$array197['candidate'] = $currentVariableContainer->getOrNull('candidate');
$arguments196['arguments'] = $array197;
$arguments196['class'] = 'btn btn-default btn-sm btn-option-candidate';
$arguments196['additionalAttributes'] = NULL;
$arguments196['data'] = NULL;
$arguments196['extensionName'] = NULL;
$arguments196['pluginName'] = NULL;
$arguments196['pageUid'] = NULL;
$arguments196['pageType'] = 0;
$arguments196['noCache'] = false;
$arguments196['noCacheHash'] = false;
$arguments196['section'] = '';
$arguments196['format'] = '';
$arguments196['linkAccessRestrictedPages'] = false;
$arguments196['additionalParams'] = array (
);
$arguments196['absolute'] = false;
$arguments196['addQueryString'] = false;
$arguments196['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments196['addQueryStringMethod'] = NULL;
$arguments196['dir'] = NULL;
$arguments196['id'] = NULL;
$arguments196['lang'] = NULL;
$arguments196['style'] = NULL;
$arguments196['title'] = NULL;
$arguments196['accesskey'] = NULL;
$arguments196['tabindex'] = NULL;
$arguments196['onclick'] = NULL;
$arguments196['name'] = NULL;
$arguments196['rel'] = NULL;
$arguments196['rev'] = NULL;
$arguments196['target'] = NULL;
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output199 = '';

$output199 .= '
                        <i class="fa fa-plus "></i> Experiences ( ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper
$arguments200 = array();
$arguments200['subject'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'experiences', $renderingContext);
$renderChildrenClosure201 = function() {return NULL;};

$output199 .= TYPO3\CMS\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output199 .= ' )
                    ';
return $output199;
};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper202->setArguments($arguments196);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure198);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper

$output148 .= $viewHelper202->initializeArgumentsAndRender();

$output148 .= '<!-- /Button edit experience : update candidate\'s experience -->
                    <!-- Display acquired skills : accordian style -->
                    <a class="btn btn-default btn-sm btn-option-candidate" data-toggle="collapse" data-target="#skills';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments203 = array();
$arguments203['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'uid', $renderingContext);
$arguments203['keepQuotes'] = false;
$arguments203['encoding'] = NULL;
$arguments203['doubleEncode'] = true;
$renderChildrenClosure204 = function() {return NULL;};
$value205 = ($arguments203['value'] !== NULL ? $arguments203['value'] : $renderChildrenClosure204());

$output148 .= (!is_string($value205) ? $value205 : htmlspecialchars($value205, ($arguments203['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments203['encoding'] !== NULL ? $arguments203['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments203['doubleEncode']));

$output148 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments206 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments207 = array();
$arguments207['glue'] = ',';
$arguments207['as'] = NULL;
$arguments207['content'] = NULL;
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'acquiredSkills', $renderingContext);
};
$viewHelper209 = $self->getViewHelper('$viewHelper209', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper');
$viewHelper209->setArguments($arguments207);
$viewHelper209->setRenderingContext($renderingContext);
$viewHelper209->setRenderChildrenClosure($renderChildrenClosure208);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments206['each'] = $viewHelper209->initializeArgumentsAndRender();
$arguments206['as'] = 'lang';
$arguments206['iteration'] = 'i';
$arguments206['key'] = '';
$arguments206['reverse'] = false;
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output211 = '';

$output211 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments212 = array();
// Rendering Boolean node
$arguments212['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'isLast', $renderingContext));
$arguments212['then'] = NULL;
$arguments212['else'] = NULL;
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output214 = '';

$output214 .= '<i class="fa fa-language "></i> Skills ( ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments215 = array();
$arguments215['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'total', $renderingContext);
$arguments215['keepQuotes'] = false;
$arguments215['encoding'] = NULL;
$arguments215['doubleEncode'] = true;
$renderChildrenClosure216 = function() {return NULL;};
$value217 = ($arguments215['value'] !== NULL ? $arguments215['value'] : $renderChildrenClosure216());

$output214 .= (!is_string($value217) ? $value217 : htmlspecialchars($value217, ($arguments215['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments215['encoding'] !== NULL ? $arguments215['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments215['doubleEncode']));

$output214 .= ' )';
return $output214;
};

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
                        ';
return $output211;
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments206, $renderChildrenClosure210, $renderingContext);

$output148 .= '
                    </a>
                    <div id="skills';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments218 = array();
$arguments218['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'uid', $renderingContext);
$arguments218['keepQuotes'] = false;
$arguments218['encoding'] = NULL;
$arguments218['doubleEncode'] = true;
$renderChildrenClosure219 = function() {return NULL;};
$value220 = ($arguments218['value'] !== NULL ? $arguments218['value'] : $renderChildrenClosure219());

$output148 .= (!is_string($value220) ? $value220 : htmlspecialchars($value220, ($arguments218['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments218['encoding'] !== NULL ? $arguments218['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments218['doubleEncode']));

$output148 .= '" class="collapse col-sm-12">
                        <i class="fa fa-globe "></i> <i class="color-pink">Acquired Skills</i> <br /> <br />
                        <i style="font-size: 15px;">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments221 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments222 = array();
$arguments222['glue'] = ',';
$arguments222['as'] = NULL;
$arguments222['content'] = NULL;
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'acquiredSkills', $renderingContext);
};
$viewHelper224 = $self->getViewHelper('$viewHelper224', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper');
$viewHelper224->setArguments($arguments222);
$viewHelper224->setRenderingContext($renderingContext);
$viewHelper224->setRenderChildrenClosure($renderChildrenClosure223);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments221['each'] = $viewHelper224->initializeArgumentsAndRender();
$arguments221['as'] = 'skill';
$arguments221['iteration'] = 'i';
$arguments221['key'] = '';
$arguments221['reverse'] = false;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output226 = '';

$output226 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments227 = array();
// Rendering Boolean node
$arguments227['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'isLast', $renderingContext));
$arguments227['then'] = NULL;
$arguments227['else'] = NULL;
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output229 = '';

$output229 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments230 = array();
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments232 = array();
$arguments232['value'] = $currentVariableContainer->getOrNull('skill');
$arguments232['keepQuotes'] = false;
$arguments232['encoding'] = NULL;
$arguments232['doubleEncode'] = true;
$renderChildrenClosure233 = function() {return NULL;};
$value234 = ($arguments232['value'] !== NULL ? $arguments232['value'] : $renderChildrenClosure233());
return (!is_string($value234) ? $value234 : htmlspecialchars($value234, ($arguments232['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments232['encoding'] !== NULL ? $arguments232['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments232['doubleEncode']));
};

$output229 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output229 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments235 = array();
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output237 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments238 = array();
$arguments238['value'] = $currentVariableContainer->getOrNull('skill');
$arguments238['keepQuotes'] = false;
$arguments238['encoding'] = NULL;
$arguments238['doubleEncode'] = true;
$renderChildrenClosure239 = function() {return NULL;};
$value240 = ($arguments238['value'] !== NULL ? $arguments238['value'] : $renderChildrenClosure239());

$output237 .= (!is_string($value240) ? $value240 : htmlspecialchars($value240, ($arguments238['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments238['encoding'] !== NULL ? $arguments238['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments238['doubleEncode']));

$output237 .= ', ';
return $output237;
};

$output229 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output229 .= '
                                ';
return $output229;
};
$arguments227['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments241 = array();
$arguments241['value'] = $currentVariableContainer->getOrNull('skill');
$arguments241['keepQuotes'] = false;
$arguments241['encoding'] = NULL;
$arguments241['doubleEncode'] = true;
$renderChildrenClosure242 = function() {return NULL;};
$value243 = ($arguments241['value'] !== NULL ? $arguments241['value'] : $renderChildrenClosure242());
return (!is_string($value243) ? $value243 : htmlspecialchars($value243, ($arguments241['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments241['encoding'] !== NULL ? $arguments241['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments241['doubleEncode']));
};
$arguments227['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output244 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments245 = array();
$arguments245['value'] = $currentVariableContainer->getOrNull('skill');
$arguments245['keepQuotes'] = false;
$arguments245['encoding'] = NULL;
$arguments245['doubleEncode'] = true;
$renderChildrenClosure246 = function() {return NULL;};
$value247 = ($arguments245['value'] !== NULL ? $arguments245['value'] : $renderChildrenClosure246());

$output244 .= (!is_string($value247) ? $value247 : htmlspecialchars($value247, ($arguments245['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments245['encoding'] !== NULL ? $arguments245['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments245['doubleEncode']));

$output244 .= ', ';
return $output244;
};

$output226 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
                            ';
return $output226;
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments221, $renderChildrenClosure225, $renderingContext);

$output148 .= '
                        </i>
                    </div><!-- Display acquired skills : accordian style -->
                    <!-- Display spoken languges : accordian style -->
                    <a class="btn btn-primary btn-sm btn-option-candidate" data-toggle="collapse" data-target="#spoken';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments248 = array();
$arguments248['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'uid', $renderingContext);
$arguments248['keepQuotes'] = false;
$arguments248['encoding'] = NULL;
$arguments248['doubleEncode'] = true;
$renderChildrenClosure249 = function() {return NULL;};
$value250 = ($arguments248['value'] !== NULL ? $arguments248['value'] : $renderChildrenClosure249());

$output148 .= (!is_string($value250) ? $value250 : htmlspecialchars($value250, ($arguments248['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments248['encoding'] !== NULL ? $arguments248['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments248['doubleEncode']));

$output148 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments251 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments252 = array();
$arguments252['glue'] = ',';
$arguments252['as'] = NULL;
$arguments252['content'] = NULL;
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'spokenLanguage', $renderingContext);
};
$viewHelper254 = $self->getViewHelper('$viewHelper254', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper');
$viewHelper254->setArguments($arguments252);
$viewHelper254->setRenderingContext($renderingContext);
$viewHelper254->setRenderChildrenClosure($renderChildrenClosure253);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments251['each'] = $viewHelper254->initializeArgumentsAndRender();
$arguments251['as'] = 'lang';
$arguments251['iteration'] = 'i';
$arguments251['key'] = '';
$arguments251['reverse'] = false;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output256 = '';

$output256 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments257 = array();
// Rendering Boolean node
$arguments257['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'isLast', $renderingContext));
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output259 = '';

$output259 .= '<i class="fa fa-language "></i> Languages ( ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments260 = array();
$arguments260['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'total', $renderingContext);
$arguments260['keepQuotes'] = false;
$arguments260['encoding'] = NULL;
$arguments260['doubleEncode'] = true;
$renderChildrenClosure261 = function() {return NULL;};
$value262 = ($arguments260['value'] !== NULL ? $arguments260['value'] : $renderChildrenClosure261());

$output259 .= (!is_string($value262) ? $value262 : htmlspecialchars($value262, ($arguments260['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments260['encoding'] !== NULL ? $arguments260['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments260['doubleEncode']));

$output259 .= ' )';
return $output259;
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '
                        ';
return $output256;
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments251, $renderChildrenClosure255, $renderingContext);

$output148 .= '
                    </a>
                    <div id="spoken';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments263 = array();
$arguments263['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'uid', $renderingContext);
$arguments263['keepQuotes'] = false;
$arguments263['encoding'] = NULL;
$arguments263['doubleEncode'] = true;
$renderChildrenClosure264 = function() {return NULL;};
$value265 = ($arguments263['value'] !== NULL ? $arguments263['value'] : $renderChildrenClosure264());

$output148 .= (!is_string($value265) ? $value265 : htmlspecialchars($value265, ($arguments263['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments263['encoding'] !== NULL ? $arguments263['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments263['doubleEncode']));

$output148 .= '" class="collapse col-sm-12">
                        <i class="fa fa-globe "></i> <i class="color-pink">Spoken languages</i> <br /> <br />
                        <i style="font-size: 15px;">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments266 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments267 = array();
$arguments267['glue'] = ',';
$arguments267['as'] = NULL;
$arguments267['content'] = NULL;
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('candidate'), 'spokenLanguage', $renderingContext);
};
$viewHelper269 = $self->getViewHelper('$viewHelper269', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper');
$viewHelper269->setArguments($arguments267);
$viewHelper269->setRenderingContext($renderingContext);
$viewHelper269->setRenderChildrenClosure($renderChildrenClosure268);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\ExplodeViewHelper
$arguments266['each'] = $viewHelper269->initializeArgumentsAndRender();
$arguments266['as'] = 'lang';
$arguments266['iteration'] = 'i';
$arguments266['key'] = '';
$arguments266['reverse'] = false;
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output271 = '';

$output271 .= '

                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments272 = array();
// Rendering Boolean node
$arguments272['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('i'), 'isLast', $renderingContext));
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output274 = '';

$output274 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments275 = array();
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments277 = array();
$arguments277['value'] = $currentVariableContainer->getOrNull('lang');
$arguments277['keepQuotes'] = false;
$arguments277['encoding'] = NULL;
$arguments277['doubleEncode'] = true;
$renderChildrenClosure278 = function() {return NULL;};
$value279 = ($arguments277['value'] !== NULL ? $arguments277['value'] : $renderChildrenClosure278());
return (!is_string($value279) ? $value279 : htmlspecialchars($value279, ($arguments277['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments277['encoding'] !== NULL ? $arguments277['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments277['doubleEncode']));
};

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments280 = array();
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output282 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments283 = array();
$arguments283['value'] = $currentVariableContainer->getOrNull('lang');
$arguments283['keepQuotes'] = false;
$arguments283['encoding'] = NULL;
$arguments283['doubleEncode'] = true;
$renderChildrenClosure284 = function() {return NULL;};
$value285 = ($arguments283['value'] !== NULL ? $arguments283['value'] : $renderChildrenClosure284());

$output282 .= (!is_string($value285) ? $value285 : htmlspecialchars($value285, ($arguments283['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments283['encoding'] !== NULL ? $arguments283['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments283['doubleEncode']));

$output282 .= ', ';
return $output282;
};

$output274 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output274 .= '
                                ';
return $output274;
};
$arguments272['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments286 = array();
$arguments286['value'] = $currentVariableContainer->getOrNull('lang');
$arguments286['keepQuotes'] = false;
$arguments286['encoding'] = NULL;
$arguments286['doubleEncode'] = true;
$renderChildrenClosure287 = function() {return NULL;};
$value288 = ($arguments286['value'] !== NULL ? $arguments286['value'] : $renderChildrenClosure287());
return (!is_string($value288) ? $value288 : htmlspecialchars($value288, ($arguments286['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments286['encoding'] !== NULL ? $arguments286['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments286['doubleEncode']));
};
$arguments272['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output289 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments290 = array();
$arguments290['value'] = $currentVariableContainer->getOrNull('lang');
$arguments290['keepQuotes'] = false;
$arguments290['encoding'] = NULL;
$arguments290['doubleEncode'] = true;
$renderChildrenClosure291 = function() {return NULL;};
$value292 = ($arguments290['value'] !== NULL ? $arguments290['value'] : $renderChildrenClosure291());

$output289 .= (!is_string($value292) ? $value292 : htmlspecialchars($value292, ($arguments290['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments290['encoding'] !== NULL ? $arguments290['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments290['doubleEncode']));

$output289 .= ', ';
return $output289;
};

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output271 .= '
                            ';
return $output271;
};

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments266, $renderChildrenClosure270, $renderingContext);

$output148 .= '
                        </i>
                    </div><!-- Display spoken languges : accordian style -->
                </div>
            </div>
        </li><!-- /dispaly one candidate -->
    ';
return $output148;
};

$output145 .= '';

$output145 .= '
</div>';


return $output145;
}


}
#1495213509    93603     