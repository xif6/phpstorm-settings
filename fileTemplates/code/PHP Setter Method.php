/**
 * Set ${FIELD_NAME}
 *
 * @param ${TYPE_HINT} $${PARAM_NAME}
 * @return ${CLASS_NAME}
 */
public ${STATIC} function set${NAME}($${PARAM_NAME})
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
    return self;
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
    return $this;
#end
}
