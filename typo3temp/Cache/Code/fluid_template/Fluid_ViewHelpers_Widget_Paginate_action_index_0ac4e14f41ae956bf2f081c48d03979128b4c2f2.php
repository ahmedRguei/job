<?php
class FluidCache_Fluid_ViewHelpers_Widget_Paginate_action_index_0ac4e14f41ae956bf2f081c48d03979128b4c2f2 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
	<div class="text-center">
		<ul class="pagination">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
			<li class="previous">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext), 1);
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments10 = array();
// Rendering Array
$array11 = array();
$array11['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments10['arguments'] = $array11;
$arguments10['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments10['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['action'] = NULL;
$arguments10['format'] = '';
$arguments10['ajax'] = false;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['name'] = NULL;
$arguments10['rel'] = NULL;
$arguments10['rev'] = NULL;
$arguments10['target'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'widget.pagination.previous';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper15->setArguments($arguments10);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure12);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output9 .= $viewHelper15->initializeArgumentsAndRender();

$output9 .= '
					';
return $output9;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output18 = '';

$output18 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments19 = array();
$arguments19['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments19['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['action'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['format'] = '';
$arguments19['ajax'] = false;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['name'] = NULL;
$arguments19['rel'] = NULL;
$arguments19['rev'] = NULL;
$arguments19['target'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments21 = array();
$arguments21['key'] = 'widget.pagination.previous';
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['htmlEscape'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$renderChildrenClosure22 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper23->setArguments($arguments19);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output18 .= $viewHelper23->initializeArgumentsAndRender();

$output18 .= '
					';
return $output18;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output6 .= '
				';
return $output6;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments25 = array();
// Rendering Array
$array26 = array();
$array26['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments25['arguments'] = $array26;
$arguments25['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments25['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['action'] = NULL;
$arguments25['format'] = '';
$arguments25['ajax'] = false;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['name'] = NULL;
$arguments25['rel'] = NULL;
$arguments25['rev'] = NULL;
$arguments25['target'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments28 = array();
$arguments28['key'] = 'widget.pagination.previous';
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['htmlEscape'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper30->setArguments($arguments25);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output24 .= $viewHelper30->initializeArgumentsAndRender();

$output24 .= '
					';
return $output24;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments32 = array();
$arguments32['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments32['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['action'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['format'] = '';
$arguments32['ajax'] = false;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['name'] = NULL;
$arguments32['rel'] = NULL;
$arguments32['rev'] = NULL;
$arguments32['target'] = NULL;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments34 = array();
$arguments34['key'] = 'widget.pagination.previous';
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper36->setArguments($arguments32);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output31 .= $viewHelper36->initializeArgumentsAndRender();

$output31 .= '
					';
return $output31;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
			</li>
		';
return $output3;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments37 = array();
// Rendering Boolean node
$arguments37['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'displayRangeStart', $renderingContext), 1);
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
			<li class="first">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments40 = array();
$arguments40['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments40['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['action'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['format'] = '';
$arguments40['ajax'] = false;
$arguments40['class'] = NULL;
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$arguments40['name'] = NULL;
$arguments40['rel'] = NULL;
$arguments40['rev'] = NULL;
$arguments40['target'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '1';
};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper42->setArguments($arguments40);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output39 .= $viewHelper42->initializeArgumentsAndRender();

$output39 .= '
			</li>
		';
return $output39;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments43 = array();
// Rendering Boolean node
$arguments43['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasLessPages', $renderingContext));
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<li><a>...</a></li>
		';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments45 = array();
$arguments45['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'pages', $renderingContext);
$arguments45['as'] = 'page';
$arguments45['key'] = '';
$arguments45['reverse'] = false;
$arguments45['iteration'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments48 = array();
// Rendering Boolean node
$arguments48['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'isCurrent', $renderingContext));
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments51 = array();
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
					<li class="active">
						<a>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output53 .= (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));

$output53 .= '</a>
					</li>
				';
return $output53;
};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments57 = array();
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output59 = '';

$output59 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments60 = array();
// Rendering Boolean node
$arguments60['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext), 1);
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments63 = array();
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output65 = '';

$output65 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments66 = array();
// Rendering Array
$array67 = array();
$array67['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments66['arguments'] = $array67;
$arguments66['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments66['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['action'] = NULL;
$arguments66['format'] = '';
$arguments66['ajax'] = false;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['name'] = NULL;
$arguments66['rel'] = NULL;
$arguments66['rev'] = NULL;
$arguments66['target'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments69 = array();
$arguments69['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments69['keepQuotes'] = false;
$arguments69['encoding'] = NULL;
$arguments69['doubleEncode'] = true;
$renderChildrenClosure70 = function() {return NULL;};
$value71 = ($arguments69['value'] !== NULL ? $arguments69['value'] : $renderChildrenClosure70());
return (!is_string($value71) ? $value71 : htmlspecialchars($value71, ($arguments69['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments69['encoding'] !== NULL ? $arguments69['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments69['doubleEncode']));
};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper72->setArguments($arguments66);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output65 .= $viewHelper72->initializeArgumentsAndRender();

$output65 .= '
							';
return $output65;
};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments73 = array();
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments76 = array();
$arguments76['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments76['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['action'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['format'] = '';
$arguments76['ajax'] = false;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['name'] = NULL;
$arguments76['rel'] = NULL;
$arguments76['rev'] = NULL;
$arguments76['target'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());
return (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));
};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper81->setArguments($arguments76);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output75 .= $viewHelper81->initializeArgumentsAndRender();

$output75 .= '
							';
return $output75;
};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output62 .= '
						';
return $output62;
};
$arguments60['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments83 = array();
// Rendering Array
$array84 = array();
$array84['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments83['arguments'] = $array84;
$arguments83['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments83['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['action'] = NULL;
$arguments83['format'] = '';
$arguments83['ajax'] = false;
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['name'] = NULL;
$arguments83['rel'] = NULL;
$arguments83['rev'] = NULL;
$arguments83['target'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments86 = array();
$arguments86['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments86['keepQuotes'] = false;
$arguments86['encoding'] = NULL;
$arguments86['doubleEncode'] = true;
$renderChildrenClosure87 = function() {return NULL;};
$value88 = ($arguments86['value'] !== NULL ? $arguments86['value'] : $renderChildrenClosure87());
return (!is_string($value88) ? $value88 : htmlspecialchars($value88, ($arguments86['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments86['encoding'] !== NULL ? $arguments86['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments86['doubleEncode']));
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper89->setArguments($arguments83);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output82 .= $viewHelper89->initializeArgumentsAndRender();

$output82 .= '
							';
return $output82;
};
$arguments60['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments91 = array();
$arguments91['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments91['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['action'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['format'] = '';
$arguments91['ajax'] = false;
$arguments91['class'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$arguments91['name'] = NULL;
$arguments91['rel'] = NULL;
$arguments91['rev'] = NULL;
$arguments91['target'] = NULL;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());
return (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));
};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper96->setArguments($arguments91);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output90 .= $viewHelper96->initializeArgumentsAndRender();

$output90 .= '
							';
return $output90;
};

$output59 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
					</li>
				';
return $output59;
};

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output50 .= '
			';
return $output50;
};
$arguments48['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
					<li class="active">
						<a>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments98 = array();
$arguments98['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments98['keepQuotes'] = false;
$arguments98['encoding'] = NULL;
$arguments98['doubleEncode'] = true;
$renderChildrenClosure99 = function() {return NULL;};
$value100 = ($arguments98['value'] !== NULL ? $arguments98['value'] : $renderChildrenClosure99());

$output97 .= (!is_string($value100) ? $value100 : htmlspecialchars($value100, ($arguments98['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments98['encoding'] !== NULL ? $arguments98['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments98['doubleEncode']));

$output97 .= '</a>
					</li>
				';
return $output97;
};
$arguments48['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments102 = array();
// Rendering Boolean node
$arguments102['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext), 1);
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output104 = '';

$output104 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments105 = array();
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output107 = '';

$output107 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments108 = array();
// Rendering Array
$array109 = array();
$array109['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments108['arguments'] = $array109;
$arguments108['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments108['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['action'] = NULL;
$arguments108['format'] = '';
$arguments108['ajax'] = false;
$arguments108['class'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['name'] = NULL;
$arguments108['rel'] = NULL;
$arguments108['rev'] = NULL;
$arguments108['target'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());
return (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));
};
$viewHelper114 = $self->getViewHelper('$viewHelper114', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper114->setArguments($arguments108);
$viewHelper114->setRenderingContext($renderingContext);
$viewHelper114->setRenderChildrenClosure($renderChildrenClosure110);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output107 .= $viewHelper114->initializeArgumentsAndRender();

$output107 .= '
							';
return $output107;
};

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments115 = array();
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments118 = array();
$arguments118['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments118['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['action'] = NULL;
$arguments118['arguments'] = array (
);
$arguments118['format'] = '';
$arguments118['ajax'] = false;
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['name'] = NULL;
$arguments118['rel'] = NULL;
$arguments118['rev'] = NULL;
$arguments118['target'] = NULL;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments120 = array();
$arguments120['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments120['keepQuotes'] = false;
$arguments120['encoding'] = NULL;
$arguments120['doubleEncode'] = true;
$renderChildrenClosure121 = function() {return NULL;};
$value122 = ($arguments120['value'] !== NULL ? $arguments120['value'] : $renderChildrenClosure121());
return (!is_string($value122) ? $value122 : htmlspecialchars($value122, ($arguments120['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments120['encoding'] !== NULL ? $arguments120['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments120['doubleEncode']));
};
$viewHelper123 = $self->getViewHelper('$viewHelper123', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper123->setArguments($arguments118);
$viewHelper123->setRenderingContext($renderingContext);
$viewHelper123->setRenderChildrenClosure($renderChildrenClosure119);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output117 .= $viewHelper123->initializeArgumentsAndRender();

$output117 .= '
							';
return $output117;
};

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output104 .= '
						';
return $output104;
};
$arguments102['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output124 = '';

$output124 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments125 = array();
// Rendering Array
$array126 = array();
$array126['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments125['arguments'] = $array126;
$arguments125['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments125['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['action'] = NULL;
$arguments125['format'] = '';
$arguments125['ajax'] = false;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['name'] = NULL;
$arguments125['rel'] = NULL;
$arguments125['rev'] = NULL;
$arguments125['target'] = NULL;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments128 = array();
$arguments128['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments128['keepQuotes'] = false;
$arguments128['encoding'] = NULL;
$arguments128['doubleEncode'] = true;
$renderChildrenClosure129 = function() {return NULL;};
$value130 = ($arguments128['value'] !== NULL ? $arguments128['value'] : $renderChildrenClosure129());
return (!is_string($value130) ? $value130 : htmlspecialchars($value130, ($arguments128['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments128['encoding'] !== NULL ? $arguments128['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments128['doubleEncode']));
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper131->setArguments($arguments125);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output124 .= $viewHelper131->initializeArgumentsAndRender();

$output124 .= '
							';
return $output124;
};
$arguments102['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output132 = '';

$output132 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments133 = array();
$arguments133['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments133['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments133['additionalAttributes'] = NULL;
$arguments133['data'] = NULL;
$arguments133['action'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['format'] = '';
$arguments133['ajax'] = false;
$arguments133['class'] = NULL;
$arguments133['dir'] = NULL;
$arguments133['id'] = NULL;
$arguments133['lang'] = NULL;
$arguments133['style'] = NULL;
$arguments133['title'] = NULL;
$arguments133['accesskey'] = NULL;
$arguments133['tabindex'] = NULL;
$arguments133['onclick'] = NULL;
$arguments133['name'] = NULL;
$arguments133['rel'] = NULL;
$arguments133['rev'] = NULL;
$arguments133['target'] = NULL;
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = NULL;
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() {return NULL;};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());
return (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments135['encoding'] !== NULL ? $arguments135['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments135['doubleEncode']));
};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper138->setArguments($arguments133);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure134);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output132 .= $viewHelper138->initializeArgumentsAndRender();

$output132 .= '
							';
return $output132;
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
					</li>
				';
return $output101;
};

$output47 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
		';
return $output47;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments139 = array();
// Rendering Boolean node
$arguments139['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasMorePages', $renderingContext));
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<li><a>...</a></li>
		';
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments141 = array();
// Rendering Boolean node
$arguments141['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'displayRangeEnd', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext));
$arguments141['then'] = NULL;
$arguments141['else'] = NULL;
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output143 = '';

$output143 .= '
			<li class="last">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments144 = array();
// Rendering Array
$array145 = array();
$array145['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments144['arguments'] = $array145;
$arguments144['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments144['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments144['additionalAttributes'] = NULL;
$arguments144['data'] = NULL;
$arguments144['action'] = NULL;
$arguments144['format'] = '';
$arguments144['ajax'] = false;
$arguments144['class'] = NULL;
$arguments144['dir'] = NULL;
$arguments144['id'] = NULL;
$arguments144['lang'] = NULL;
$arguments144['style'] = NULL;
$arguments144['title'] = NULL;
$arguments144['accesskey'] = NULL;
$arguments144['tabindex'] = NULL;
$arguments144['onclick'] = NULL;
$arguments144['name'] = NULL;
$arguments144['rel'] = NULL;
$arguments144['rev'] = NULL;
$arguments144['target'] = NULL;
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments147 = array();
$arguments147['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments147['keepQuotes'] = false;
$arguments147['encoding'] = NULL;
$arguments147['doubleEncode'] = true;
$renderChildrenClosure148 = function() {return NULL;};
$value149 = ($arguments147['value'] !== NULL ? $arguments147['value'] : $renderChildrenClosure148());
return (!is_string($value149) ? $value149 : htmlspecialchars($value149, ($arguments147['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments147['encoding'] !== NULL ? $arguments147['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments147['doubleEncode']));
};
$viewHelper150 = $self->getViewHelper('$viewHelper150', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper150->setArguments($arguments144);
$viewHelper150->setRenderingContext($renderingContext);
$viewHelper150->setRenderChildrenClosure($renderChildrenClosure146);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output143 .= $viewHelper150->initializeArgumentsAndRender();

$output143 .= '
			</li>
		';
return $output143;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments151 = array();
// Rendering Boolean node
$arguments151['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext));
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output153 = '';

$output153 .= '
			<li class="next">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments154 = array();
// Rendering Array
$array155 = array();
$array155['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext);
$arguments154['arguments'] = $array155;
$arguments154['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments154['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['action'] = NULL;
$arguments154['format'] = '';
$arguments154['ajax'] = false;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments157 = array();
$arguments157['key'] = 'widget.pagination.next';
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['htmlEscape'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$renderChildrenClosure158 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);
};
$viewHelper159 = $self->getViewHelper('$viewHelper159', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper159->setArguments($arguments154);
$viewHelper159->setRenderingContext($renderingContext);
$viewHelper159->setRenderChildrenClosure($renderChildrenClosure156);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output153 .= $viewHelper159->initializeArgumentsAndRender();

$output153 .= '
			</li>
		';
return $output153;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output0 .= '
	</ul>
	</div>
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output160 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments161 = array();
// Rendering Boolean node
$arguments161['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'insertAbove', $renderingContext));
$arguments161['then'] = NULL;
$arguments161['else'] = NULL;
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output163 = '';

$output163 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments164 = array();
$arguments164['section'] = 'paginator';
// Rendering Array
$array165 = array();
$array165['pagination'] = $currentVariableContainer->getOrNull('pagination');
$array165['configuration'] = $currentVariableContainer->getOrNull('configuration');
$arguments164['arguments'] = $array165;
$arguments164['partial'] = NULL;
$arguments164['optional'] = false;
$renderChildrenClosure166 = function() {return NULL;};

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments164, $renderChildrenClosure166, $renderingContext);

$output163 .= '
';
return $output163;
};

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper
$arguments167 = array();
$arguments167['arguments'] = $currentVariableContainer->getOrNull('contentArguments');
$renderChildrenClosure168 = function() {return NULL;};
$viewHelper169 = $self->getViewHelper('$viewHelper169', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper');
$viewHelper169->setArguments($arguments167);
$viewHelper169->setRenderingContext($renderingContext);
$viewHelper169->setRenderChildrenClosure($renderChildrenClosure168);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper

$output160 .= $viewHelper169->initializeArgumentsAndRender();

$output160 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments170 = array();
// Rendering Boolean node
$arguments170['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'insertBelow', $renderingContext));
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output172 = '';

$output172 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments173 = array();
$arguments173['section'] = 'paginator';
// Rendering Array
$array174 = array();
$array174['pagination'] = $currentVariableContainer->getOrNull('pagination');
$array174['configuration'] = $currentVariableContainer->getOrNull('configuration');
$arguments173['arguments'] = $array174;
$arguments173['partial'] = NULL;
$arguments173['optional'] = false;
$renderChildrenClosure175 = function() {return NULL;};

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments173, $renderChildrenClosure175, $renderingContext);

$output172 .= '
';
return $output172;
};

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output160 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments176 = array();
$arguments176['name'] = 'paginator';
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output178 = '';

$output178 .= '
	<div class="text-center">
		<ul class="pagination">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments179 = array();
// Rendering Boolean node
$arguments179['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext));
$arguments179['then'] = NULL;
$arguments179['else'] = NULL;
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output181 = '';

$output181 .= '
			<li class="previous">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments182 = array();
// Rendering Boolean node
$arguments182['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext), 1);
$arguments182['then'] = NULL;
$arguments182['else'] = NULL;
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output184 = '';

$output184 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments185 = array();
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output187 = '';

$output187 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments188 = array();
// Rendering Array
$array189 = array();
$array189['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments188['arguments'] = $array189;
$arguments188['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments188['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments188['additionalAttributes'] = NULL;
$arguments188['data'] = NULL;
$arguments188['action'] = NULL;
$arguments188['format'] = '';
$arguments188['ajax'] = false;
$arguments188['class'] = NULL;
$arguments188['dir'] = NULL;
$arguments188['id'] = NULL;
$arguments188['lang'] = NULL;
$arguments188['style'] = NULL;
$arguments188['title'] = NULL;
$arguments188['accesskey'] = NULL;
$arguments188['tabindex'] = NULL;
$arguments188['onclick'] = NULL;
$arguments188['name'] = NULL;
$arguments188['rel'] = NULL;
$arguments188['rev'] = NULL;
$arguments188['target'] = NULL;
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments191 = array();
$arguments191['key'] = 'widget.pagination.previous';
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['htmlEscape'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$renderChildrenClosure192 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);
};
$viewHelper193 = $self->getViewHelper('$viewHelper193', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper193->setArguments($arguments188);
$viewHelper193->setRenderingContext($renderingContext);
$viewHelper193->setRenderChildrenClosure($renderChildrenClosure190);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output187 .= $viewHelper193->initializeArgumentsAndRender();

$output187 .= '
					';
return $output187;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments194 = array();
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output196 = '';

$output196 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments197 = array();
$arguments197['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments197['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments197['additionalAttributes'] = NULL;
$arguments197['data'] = NULL;
$arguments197['action'] = NULL;
$arguments197['arguments'] = array (
);
$arguments197['format'] = '';
$arguments197['ajax'] = false;
$arguments197['class'] = NULL;
$arguments197['dir'] = NULL;
$arguments197['id'] = NULL;
$arguments197['lang'] = NULL;
$arguments197['style'] = NULL;
$arguments197['title'] = NULL;
$arguments197['accesskey'] = NULL;
$arguments197['tabindex'] = NULL;
$arguments197['onclick'] = NULL;
$arguments197['name'] = NULL;
$arguments197['rel'] = NULL;
$arguments197['rev'] = NULL;
$arguments197['target'] = NULL;
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments199 = array();
$arguments199['key'] = 'widget.pagination.previous';
$arguments199['id'] = NULL;
$arguments199['default'] = NULL;
$arguments199['htmlEscape'] = NULL;
$arguments199['arguments'] = NULL;
$arguments199['extensionName'] = NULL;
$renderChildrenClosure200 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);
};
$viewHelper201 = $self->getViewHelper('$viewHelper201', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper201->setArguments($arguments197);
$viewHelper201->setRenderingContext($renderingContext);
$viewHelper201->setRenderChildrenClosure($renderChildrenClosure198);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output196 .= $viewHelper201->initializeArgumentsAndRender();

$output196 .= '
					';
return $output196;
};

$output184 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output184 .= '
				';
return $output184;
};
$arguments182['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output202 = '';

$output202 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments203 = array();
// Rendering Array
$array204 = array();
$array204['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'previousPage', $renderingContext);
$arguments203['arguments'] = $array204;
$arguments203['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments203['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments203['additionalAttributes'] = NULL;
$arguments203['data'] = NULL;
$arguments203['action'] = NULL;
$arguments203['format'] = '';
$arguments203['ajax'] = false;
$arguments203['class'] = NULL;
$arguments203['dir'] = NULL;
$arguments203['id'] = NULL;
$arguments203['lang'] = NULL;
$arguments203['style'] = NULL;
$arguments203['title'] = NULL;
$arguments203['accesskey'] = NULL;
$arguments203['tabindex'] = NULL;
$arguments203['onclick'] = NULL;
$arguments203['name'] = NULL;
$arguments203['rel'] = NULL;
$arguments203['rev'] = NULL;
$arguments203['target'] = NULL;
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments206 = array();
$arguments206['key'] = 'widget.pagination.previous';
$arguments206['id'] = NULL;
$arguments206['default'] = NULL;
$arguments206['htmlEscape'] = NULL;
$arguments206['arguments'] = NULL;
$arguments206['extensionName'] = NULL;
$renderChildrenClosure207 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);
};
$viewHelper208 = $self->getViewHelper('$viewHelper208', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper208->setArguments($arguments203);
$viewHelper208->setRenderingContext($renderingContext);
$viewHelper208->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output202 .= $viewHelper208->initializeArgumentsAndRender();

$output202 .= '
					';
return $output202;
};
$arguments182['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output209 = '';

$output209 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments210 = array();
$arguments210['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments210['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments210['additionalAttributes'] = NULL;
$arguments210['data'] = NULL;
$arguments210['action'] = NULL;
$arguments210['arguments'] = array (
);
$arguments210['format'] = '';
$arguments210['ajax'] = false;
$arguments210['class'] = NULL;
$arguments210['dir'] = NULL;
$arguments210['id'] = NULL;
$arguments210['lang'] = NULL;
$arguments210['style'] = NULL;
$arguments210['title'] = NULL;
$arguments210['accesskey'] = NULL;
$arguments210['tabindex'] = NULL;
$arguments210['onclick'] = NULL;
$arguments210['name'] = NULL;
$arguments210['rel'] = NULL;
$arguments210['rev'] = NULL;
$arguments210['target'] = NULL;
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments212 = array();
$arguments212['key'] = 'widget.pagination.previous';
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['htmlEscape'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$renderChildrenClosure213 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);
};
$viewHelper214 = $self->getViewHelper('$viewHelper214', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper214->setArguments($arguments210);
$viewHelper214->setRenderingContext($renderingContext);
$viewHelper214->setRenderChildrenClosure($renderChildrenClosure211);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output209 .= $viewHelper214->initializeArgumentsAndRender();

$output209 .= '
					';
return $output209;
};

$output181 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
			</li>
		';
return $output181;
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments215 = array();
// Rendering Boolean node
$arguments215['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'displayRangeStart', $renderingContext), 1);
$arguments215['then'] = NULL;
$arguments215['else'] = NULL;
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output217 = '';

$output217 .= '
			<li class="first">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments218 = array();
$arguments218['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments218['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments218['additionalAttributes'] = NULL;
$arguments218['data'] = NULL;
$arguments218['action'] = NULL;
$arguments218['arguments'] = array (
);
$arguments218['format'] = '';
$arguments218['ajax'] = false;
$arguments218['class'] = NULL;
$arguments218['dir'] = NULL;
$arguments218['id'] = NULL;
$arguments218['lang'] = NULL;
$arguments218['style'] = NULL;
$arguments218['title'] = NULL;
$arguments218['accesskey'] = NULL;
$arguments218['tabindex'] = NULL;
$arguments218['onclick'] = NULL;
$arguments218['name'] = NULL;
$arguments218['rel'] = NULL;
$arguments218['rev'] = NULL;
$arguments218['target'] = NULL;
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '1';
};
$viewHelper220 = $self->getViewHelper('$viewHelper220', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper220->setArguments($arguments218);
$viewHelper220->setRenderingContext($renderingContext);
$viewHelper220->setRenderChildrenClosure($renderChildrenClosure219);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output217 .= $viewHelper220->initializeArgumentsAndRender();

$output217 .= '
			</li>
		';
return $output217;
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output178 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments221 = array();
// Rendering Boolean node
$arguments221['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasLessPages', $renderingContext));
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<li><a>...</a></li>
		';
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output178 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments223 = array();
$arguments223['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'pages', $renderingContext);
$arguments223['as'] = 'page';
$arguments223['key'] = '';
$arguments223['reverse'] = false;
$arguments223['iteration'] = NULL;
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output225 = '';

$output225 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments226 = array();
// Rendering Boolean node
$arguments226['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'isCurrent', $renderingContext));
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output228 = '';

$output228 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments229 = array();
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output231 = '';

$output231 .= '
					<li class="active">
						<a>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments232 = array();
$arguments232['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments232['keepQuotes'] = false;
$arguments232['encoding'] = NULL;
$arguments232['doubleEncode'] = true;
$renderChildrenClosure233 = function() {return NULL;};
$value234 = ($arguments232['value'] !== NULL ? $arguments232['value'] : $renderChildrenClosure233());

$output231 .= (!is_string($value234) ? $value234 : htmlspecialchars($value234, ($arguments232['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments232['encoding'] !== NULL ? $arguments232['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments232['doubleEncode']));

$output231 .= '</a>
					</li>
				';
return $output231;
};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments235 = array();
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output237 = '';

$output237 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments238 = array();
// Rendering Boolean node
$arguments238['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext), 1);
$arguments238['then'] = NULL;
$arguments238['else'] = NULL;
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output240 = '';

$output240 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments241 = array();
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output243 = '';

$output243 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments244 = array();
// Rendering Array
$array245 = array();
$array245['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments244['arguments'] = $array245;
$arguments244['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments244['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments244['additionalAttributes'] = NULL;
$arguments244['data'] = NULL;
$arguments244['action'] = NULL;
$arguments244['format'] = '';
$arguments244['ajax'] = false;
$arguments244['class'] = NULL;
$arguments244['dir'] = NULL;
$arguments244['id'] = NULL;
$arguments244['lang'] = NULL;
$arguments244['style'] = NULL;
$arguments244['title'] = NULL;
$arguments244['accesskey'] = NULL;
$arguments244['tabindex'] = NULL;
$arguments244['onclick'] = NULL;
$arguments244['name'] = NULL;
$arguments244['rel'] = NULL;
$arguments244['rev'] = NULL;
$arguments244['target'] = NULL;
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments247 = array();
$arguments247['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments247['keepQuotes'] = false;
$arguments247['encoding'] = NULL;
$arguments247['doubleEncode'] = true;
$renderChildrenClosure248 = function() {return NULL;};
$value249 = ($arguments247['value'] !== NULL ? $arguments247['value'] : $renderChildrenClosure248());
return (!is_string($value249) ? $value249 : htmlspecialchars($value249, ($arguments247['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments247['encoding'] !== NULL ? $arguments247['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments247['doubleEncode']));
};
$viewHelper250 = $self->getViewHelper('$viewHelper250', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper250->setArguments($arguments244);
$viewHelper250->setRenderingContext($renderingContext);
$viewHelper250->setRenderChildrenClosure($renderChildrenClosure246);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output243 .= $viewHelper250->initializeArgumentsAndRender();

$output243 .= '
							';
return $output243;
};

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments251 = array();
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output253 = '';

$output253 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments254 = array();
$arguments254['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments254['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments254['additionalAttributes'] = NULL;
$arguments254['data'] = NULL;
$arguments254['action'] = NULL;
$arguments254['arguments'] = array (
);
$arguments254['format'] = '';
$arguments254['ajax'] = false;
$arguments254['class'] = NULL;
$arguments254['dir'] = NULL;
$arguments254['id'] = NULL;
$arguments254['lang'] = NULL;
$arguments254['style'] = NULL;
$arguments254['title'] = NULL;
$arguments254['accesskey'] = NULL;
$arguments254['tabindex'] = NULL;
$arguments254['onclick'] = NULL;
$arguments254['name'] = NULL;
$arguments254['rel'] = NULL;
$arguments254['rev'] = NULL;
$arguments254['target'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments256 = array();
$arguments256['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments256['keepQuotes'] = false;
$arguments256['encoding'] = NULL;
$arguments256['doubleEncode'] = true;
$renderChildrenClosure257 = function() {return NULL;};
$value258 = ($arguments256['value'] !== NULL ? $arguments256['value'] : $renderChildrenClosure257());
return (!is_string($value258) ? $value258 : htmlspecialchars($value258, ($arguments256['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments256['encoding'] !== NULL ? $arguments256['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments256['doubleEncode']));
};
$viewHelper259 = $self->getViewHelper('$viewHelper259', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper259->setArguments($arguments254);
$viewHelper259->setRenderingContext($renderingContext);
$viewHelper259->setRenderChildrenClosure($renderChildrenClosure255);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output253 .= $viewHelper259->initializeArgumentsAndRender();

$output253 .= '
							';
return $output253;
};

$output240 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output240 .= '
						';
return $output240;
};
$arguments238['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output260 = '';

$output260 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments261 = array();
// Rendering Array
$array262 = array();
$array262['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments261['arguments'] = $array262;
$arguments261['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments261['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments261['additionalAttributes'] = NULL;
$arguments261['data'] = NULL;
$arguments261['action'] = NULL;
$arguments261['format'] = '';
$arguments261['ajax'] = false;
$arguments261['class'] = NULL;
$arguments261['dir'] = NULL;
$arguments261['id'] = NULL;
$arguments261['lang'] = NULL;
$arguments261['style'] = NULL;
$arguments261['title'] = NULL;
$arguments261['accesskey'] = NULL;
$arguments261['tabindex'] = NULL;
$arguments261['onclick'] = NULL;
$arguments261['name'] = NULL;
$arguments261['rel'] = NULL;
$arguments261['rev'] = NULL;
$arguments261['target'] = NULL;
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments264 = array();
$arguments264['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments264['keepQuotes'] = false;
$arguments264['encoding'] = NULL;
$arguments264['doubleEncode'] = true;
$renderChildrenClosure265 = function() {return NULL;};
$value266 = ($arguments264['value'] !== NULL ? $arguments264['value'] : $renderChildrenClosure265());
return (!is_string($value266) ? $value266 : htmlspecialchars($value266, ($arguments264['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments264['encoding'] !== NULL ? $arguments264['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments264['doubleEncode']));
};
$viewHelper267 = $self->getViewHelper('$viewHelper267', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper267->setArguments($arguments261);
$viewHelper267->setRenderingContext($renderingContext);
$viewHelper267->setRenderChildrenClosure($renderChildrenClosure263);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output260 .= $viewHelper267->initializeArgumentsAndRender();

$output260 .= '
							';
return $output260;
};
$arguments238['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output268 = '';

$output268 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments269 = array();
$arguments269['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments269['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments269['additionalAttributes'] = NULL;
$arguments269['data'] = NULL;
$arguments269['action'] = NULL;
$arguments269['arguments'] = array (
);
$arguments269['format'] = '';
$arguments269['ajax'] = false;
$arguments269['class'] = NULL;
$arguments269['dir'] = NULL;
$arguments269['id'] = NULL;
$arguments269['lang'] = NULL;
$arguments269['style'] = NULL;
$arguments269['title'] = NULL;
$arguments269['accesskey'] = NULL;
$arguments269['tabindex'] = NULL;
$arguments269['onclick'] = NULL;
$arguments269['name'] = NULL;
$arguments269['rel'] = NULL;
$arguments269['rev'] = NULL;
$arguments269['target'] = NULL;
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments271 = array();
$arguments271['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments271['keepQuotes'] = false;
$arguments271['encoding'] = NULL;
$arguments271['doubleEncode'] = true;
$renderChildrenClosure272 = function() {return NULL;};
$value273 = ($arguments271['value'] !== NULL ? $arguments271['value'] : $renderChildrenClosure272());
return (!is_string($value273) ? $value273 : htmlspecialchars($value273, ($arguments271['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments271['encoding'] !== NULL ? $arguments271['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments271['doubleEncode']));
};
$viewHelper274 = $self->getViewHelper('$viewHelper274', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper274->setArguments($arguments269);
$viewHelper274->setRenderingContext($renderingContext);
$viewHelper274->setRenderChildrenClosure($renderChildrenClosure270);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output268 .= $viewHelper274->initializeArgumentsAndRender();

$output268 .= '
							';
return $output268;
};

$output237 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output237 .= '
					</li>
				';
return $output237;
};

$output228 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output228 .= '
			';
return $output228;
};
$arguments226['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output275 = '';

$output275 .= '
					<li class="active">
						<a>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments276 = array();
$arguments276['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments276['keepQuotes'] = false;
$arguments276['encoding'] = NULL;
$arguments276['doubleEncode'] = true;
$renderChildrenClosure277 = function() {return NULL;};
$value278 = ($arguments276['value'] !== NULL ? $arguments276['value'] : $renderChildrenClosure277());

$output275 .= (!is_string($value278) ? $value278 : htmlspecialchars($value278, ($arguments276['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments276['encoding'] !== NULL ? $arguments276['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments276['doubleEncode']));

$output275 .= '</a>
					</li>
				';
return $output275;
};
$arguments226['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output279 = '';

$output279 .= '
					<li>
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments280 = array();
// Rendering Boolean node
$arguments280['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('>', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext), 1);
$arguments280['then'] = NULL;
$arguments280['else'] = NULL;
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output282 = '';

$output282 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments283 = array();
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output285 = '';

$output285 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments286 = array();
// Rendering Array
$array287 = array();
$array287['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments286['arguments'] = $array287;
$arguments286['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments286['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments286['additionalAttributes'] = NULL;
$arguments286['data'] = NULL;
$arguments286['action'] = NULL;
$arguments286['format'] = '';
$arguments286['ajax'] = false;
$arguments286['class'] = NULL;
$arguments286['dir'] = NULL;
$arguments286['id'] = NULL;
$arguments286['lang'] = NULL;
$arguments286['style'] = NULL;
$arguments286['title'] = NULL;
$arguments286['accesskey'] = NULL;
$arguments286['tabindex'] = NULL;
$arguments286['onclick'] = NULL;
$arguments286['name'] = NULL;
$arguments286['rel'] = NULL;
$arguments286['rev'] = NULL;
$arguments286['target'] = NULL;
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments289 = array();
$arguments289['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments289['keepQuotes'] = false;
$arguments289['encoding'] = NULL;
$arguments289['doubleEncode'] = true;
$renderChildrenClosure290 = function() {return NULL;};
$value291 = ($arguments289['value'] !== NULL ? $arguments289['value'] : $renderChildrenClosure290());
return (!is_string($value291) ? $value291 : htmlspecialchars($value291, ($arguments289['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments289['encoding'] !== NULL ? $arguments289['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments289['doubleEncode']));
};
$viewHelper292 = $self->getViewHelper('$viewHelper292', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper292->setArguments($arguments286);
$viewHelper292->setRenderingContext($renderingContext);
$viewHelper292->setRenderChildrenClosure($renderChildrenClosure288);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output285 .= $viewHelper292->initializeArgumentsAndRender();

$output285 .= '
							';
return $output285;
};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments293 = array();
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output295 = '';

$output295 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments296 = array();
$arguments296['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments296['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments296['additionalAttributes'] = NULL;
$arguments296['data'] = NULL;
$arguments296['action'] = NULL;
$arguments296['arguments'] = array (
);
$arguments296['format'] = '';
$arguments296['ajax'] = false;
$arguments296['class'] = NULL;
$arguments296['dir'] = NULL;
$arguments296['id'] = NULL;
$arguments296['lang'] = NULL;
$arguments296['style'] = NULL;
$arguments296['title'] = NULL;
$arguments296['accesskey'] = NULL;
$arguments296['tabindex'] = NULL;
$arguments296['onclick'] = NULL;
$arguments296['name'] = NULL;
$arguments296['rel'] = NULL;
$arguments296['rev'] = NULL;
$arguments296['target'] = NULL;
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments298 = array();
$arguments298['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments298['keepQuotes'] = false;
$arguments298['encoding'] = NULL;
$arguments298['doubleEncode'] = true;
$renderChildrenClosure299 = function() {return NULL;};
$value300 = ($arguments298['value'] !== NULL ? $arguments298['value'] : $renderChildrenClosure299());
return (!is_string($value300) ? $value300 : htmlspecialchars($value300, ($arguments298['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments298['encoding'] !== NULL ? $arguments298['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments298['doubleEncode']));
};
$viewHelper301 = $self->getViewHelper('$viewHelper301', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper301->setArguments($arguments296);
$viewHelper301->setRenderingContext($renderingContext);
$viewHelper301->setRenderChildrenClosure($renderChildrenClosure297);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output295 .= $viewHelper301->initializeArgumentsAndRender();

$output295 .= '
							';
return $output295;
};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output282 .= '
						';
return $output282;
};
$arguments280['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output302 = '';

$output302 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments303 = array();
// Rendering Array
$array304 = array();
$array304['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments303['arguments'] = $array304;
$arguments303['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments303['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments303['additionalAttributes'] = NULL;
$arguments303['data'] = NULL;
$arguments303['action'] = NULL;
$arguments303['format'] = '';
$arguments303['ajax'] = false;
$arguments303['class'] = NULL;
$arguments303['dir'] = NULL;
$arguments303['id'] = NULL;
$arguments303['lang'] = NULL;
$arguments303['style'] = NULL;
$arguments303['title'] = NULL;
$arguments303['accesskey'] = NULL;
$arguments303['tabindex'] = NULL;
$arguments303['onclick'] = NULL;
$arguments303['name'] = NULL;
$arguments303['rel'] = NULL;
$arguments303['rev'] = NULL;
$arguments303['target'] = NULL;
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments306 = array();
$arguments306['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments306['keepQuotes'] = false;
$arguments306['encoding'] = NULL;
$arguments306['doubleEncode'] = true;
$renderChildrenClosure307 = function() {return NULL;};
$value308 = ($arguments306['value'] !== NULL ? $arguments306['value'] : $renderChildrenClosure307());
return (!is_string($value308) ? $value308 : htmlspecialchars($value308, ($arguments306['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments306['encoding'] !== NULL ? $arguments306['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments306['doubleEncode']));
};
$viewHelper309 = $self->getViewHelper('$viewHelper309', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper309->setArguments($arguments303);
$viewHelper309->setRenderingContext($renderingContext);
$viewHelper309->setRenderChildrenClosure($renderChildrenClosure305);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output302 .= $viewHelper309->initializeArgumentsAndRender();

$output302 .= '
							';
return $output302;
};
$arguments280['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output310 = '';

$output310 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments311 = array();
$arguments311['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments311['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments311['additionalAttributes'] = NULL;
$arguments311['data'] = NULL;
$arguments311['action'] = NULL;
$arguments311['arguments'] = array (
);
$arguments311['format'] = '';
$arguments311['ajax'] = false;
$arguments311['class'] = NULL;
$arguments311['dir'] = NULL;
$arguments311['id'] = NULL;
$arguments311['lang'] = NULL;
$arguments311['style'] = NULL;
$arguments311['title'] = NULL;
$arguments311['accesskey'] = NULL;
$arguments311['tabindex'] = NULL;
$arguments311['onclick'] = NULL;
$arguments311['name'] = NULL;
$arguments311['rel'] = NULL;
$arguments311['rev'] = NULL;
$arguments311['target'] = NULL;
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments313 = array();
$arguments313['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'number', $renderingContext);
$arguments313['keepQuotes'] = false;
$arguments313['encoding'] = NULL;
$arguments313['doubleEncode'] = true;
$renderChildrenClosure314 = function() {return NULL;};
$value315 = ($arguments313['value'] !== NULL ? $arguments313['value'] : $renderChildrenClosure314());
return (!is_string($value315) ? $value315 : htmlspecialchars($value315, ($arguments313['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments313['encoding'] !== NULL ? $arguments313['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments313['doubleEncode']));
};
$viewHelper316 = $self->getViewHelper('$viewHelper316', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper316->setArguments($arguments311);
$viewHelper316->setRenderingContext($renderingContext);
$viewHelper316->setRenderChildrenClosure($renderChildrenClosure312);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output310 .= $viewHelper316->initializeArgumentsAndRender();

$output310 .= '
							';
return $output310;
};

$output279 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output279 .= '
					</li>
				';
return $output279;
};

$output225 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output225 .= '
		';
return $output225;
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);

$output178 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments317 = array();
// Rendering Boolean node
$arguments317['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'hasMorePages', $renderingContext));
$arguments317['then'] = NULL;
$arguments317['else'] = NULL;
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<li><a>...</a></li>
		';
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output178 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments319 = array();
// Rendering Boolean node
$arguments319['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'displayRangeEnd', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext));
$arguments319['then'] = NULL;
$arguments319['else'] = NULL;
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output321 = '';

$output321 .= '
			<li class="last">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments322 = array();
// Rendering Array
$array323 = array();
$array323['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments322['arguments'] = $array323;
$arguments322['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments322['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments322['additionalAttributes'] = NULL;
$arguments322['data'] = NULL;
$arguments322['action'] = NULL;
$arguments322['format'] = '';
$arguments322['ajax'] = false;
$arguments322['class'] = NULL;
$arguments322['dir'] = NULL;
$arguments322['id'] = NULL;
$arguments322['lang'] = NULL;
$arguments322['style'] = NULL;
$arguments322['title'] = NULL;
$arguments322['accesskey'] = NULL;
$arguments322['tabindex'] = NULL;
$arguments322['onclick'] = NULL;
$arguments322['name'] = NULL;
$arguments322['rel'] = NULL;
$arguments322['rev'] = NULL;
$arguments322['target'] = NULL;
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments325 = array();
$arguments325['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'numberOfPages', $renderingContext);
$arguments325['keepQuotes'] = false;
$arguments325['encoding'] = NULL;
$arguments325['doubleEncode'] = true;
$renderChildrenClosure326 = function() {return NULL;};
$value327 = ($arguments325['value'] !== NULL ? $arguments325['value'] : $renderChildrenClosure326());
return (!is_string($value327) ? $value327 : htmlspecialchars($value327, ($arguments325['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments325['encoding'] !== NULL ? $arguments325['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments325['doubleEncode']));
};
$viewHelper328 = $self->getViewHelper('$viewHelper328', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper328->setArguments($arguments322);
$viewHelper328->setRenderingContext($renderingContext);
$viewHelper328->setRenderChildrenClosure($renderChildrenClosure324);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output321 .= $viewHelper328->initializeArgumentsAndRender();

$output321 .= '
			</li>
		';
return $output321;
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output178 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments329 = array();
// Rendering Boolean node
$arguments329['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext));
$arguments329['then'] = NULL;
$arguments329['else'] = NULL;
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output331 = '';

$output331 .= '
			<li class="next">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$arguments332 = array();
// Rendering Array
$array333 = array();
$array333['currentPage'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('pagination'), 'nextPage', $renderingContext);
$arguments332['arguments'] = $array333;
$arguments332['addQueryStringMethod'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'addQueryStringMethod', $renderingContext);
$arguments332['section'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('configuration'), 'section', $renderingContext);
$arguments332['additionalAttributes'] = NULL;
$arguments332['data'] = NULL;
$arguments332['action'] = NULL;
$arguments332['format'] = '';
$arguments332['ajax'] = false;
$arguments332['class'] = NULL;
$arguments332['dir'] = NULL;
$arguments332['id'] = NULL;
$arguments332['lang'] = NULL;
$arguments332['style'] = NULL;
$arguments332['title'] = NULL;
$arguments332['accesskey'] = NULL;
$arguments332['tabindex'] = NULL;
$arguments332['onclick'] = NULL;
$arguments332['name'] = NULL;
$arguments332['rel'] = NULL;
$arguments332['rev'] = NULL;
$arguments332['target'] = NULL;
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments335 = array();
$arguments335['key'] = 'widget.pagination.next';
$arguments335['id'] = NULL;
$arguments335['default'] = NULL;
$arguments335['htmlEscape'] = NULL;
$arguments335['arguments'] = NULL;
$arguments335['extensionName'] = NULL;
$renderChildrenClosure336 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);
};
$viewHelper337 = $self->getViewHelper('$viewHelper337', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper');
$viewHelper337->setArguments($arguments332);
$viewHelper337->setRenderingContext($renderingContext);
$viewHelper337->setRenderChildrenClosure($renderChildrenClosure334);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper

$output331 .= $viewHelper337->initializeArgumentsAndRender();

$output331 .= '
			</li>
		';
return $output331;
};

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output178 .= '
	</ul>
	</div>
';
return $output178;
};

$output160 .= '';


return $output160;
}


}
#1495556797    113864    